<?php

/*
 * This file is part of the Fomalhaut package.
 *
 * Copyright (c) 2015-2016 FomalhautLab
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Huang Shuo <dahwang@126.com>
 */

namespace Fomalhaut\Component\User\Services;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Elcodi\Component\Core\Generator\Interfaces\GeneratorInterface;

use Fomalhaut\Component\User\EventDispatcher\Interfaces\PasswordEventDispatcherInterface;
use Fomalhaut\Component\User\Entity\Abstracts\AbstractUser;
use Fomalhaut\Component\User\Repository\Interfaces\UserEmaileableInterface;

class PasswordManager
{
    /**
     * @var ObjectManager
     *
     * Entity manager
     */
    private $manager;

    /**
     * @var UrlGeneratorInterface
     *
     * Router generator
     */
    private $router;

    /**
     * @var PasswordEventDispatcherInterface
     *
     * Password EventDispatcher
     */
    private $passwordEventDispatcher;

    /**
     * @var GeneratorInterface
     *
     * Recovery hash generator
     */
    private $recoveryHashGenerator;

    /**
     * PasswordManager constructor.
     * @param ObjectManager                     $manager
     * @param UrlGeneratorInterface             $router
     * @param PasswordEventDispatcherInterface  $passwordEventDispatcher
     * @param GeneratorInterface                $recoveryHashGenerator
     */
    public function __construct(
        ObjectManager $manager,
        UrlGeneratorInterface $router,
        PasswordEventDispatcherInterface $passwordEventDispatcher,
        GeneratorInterface $recoveryHashGenerator
    ) {
        $this->manager = $manager;
        $this->router = $router;
        $this->passwordEventDispatcher = $passwordEventDispatcher;
        $this->recoveryHashGenerator = $recoveryHashGenerator;
    }

    /**
     * @param UserEmaileableInterface   $userRepository
     * @param string                    $email
     * @param string                    $recoverPasswordUrlName
     * @param string                    $hashField
     *
     * @return bool
     */
    public function rememberPasswordByEmail(
        UserEmaileableInterface $userRepository,
        $email,
        $recoverPasswordUrlName,
        $hashField = 'hash'
    ) {
        $user = $userRepository->findOneByEmail($email);

        if (!($user instanceof AbstractUser)) {
            return false;
        }

        $this->rememberPassword($user, $recoverPasswordUrlName, $hashField);

        return true;
    }

    public function rememberPassword(
        AbstractUser $user,
        $recoverPasswordUrlName,
        $hashField
    ) {
        $recoveryHash = $this->recoveryHashGenerator->generate();
        $user->setRecoveryHash($recoveryHash);
        $this->manager->flush($user);

        $recoverUrl = $this
            ->router
            ->generate($recoverPasswordUrlName, [
                $hashField => $recoveryHash,
            ], true);

        $this
            ->passwordEventDispatcher
            ->dispatchOnPasswordRememberEvent(
                $user,
                $recoverUrl
            );

        return $this;
    }

    /**
     * Recovers a password given a user.
     *
     * @param AbstractUser $user        User
     * @param string       $hash        Hash given by provider
     * @param string       $newPassword New password
     *
     * @return $this Self object
     */
    public function recoverPassword(AbstractUser $user, $hash, $newPassword)
    {
        if ($hash == $user->getRecoveryHash()) {
            $user
                ->setPassword($newPassword)
                ->setRecoveryHash(null);
            $this->manager->flush($user);

            $this
                ->passwordEventDispatcher
                ->dispatchOnPasswordRecoverEvent($user);
        }

        return $this;
    }
}