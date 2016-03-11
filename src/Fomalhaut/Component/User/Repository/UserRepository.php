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

namespace Fomalhaut\Component\User\Repository;

use Doctrine\ORM\EntityRepository;

use Fomalhaut\Component\User\Repository\Interfaces\UserEmaileableInterface;
use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;

/**
 * Class UserRepository
 * @package Fomalhaut\Component\User\Repository
 */
class UserRepository extends EntityRepository implements UserEmaileableInterface
{
    public function findOneByUsername($username)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->getQuery()
            ->getResult();

        return $user;
    }

    public function findOneByEmail($email)
    {
        $user = $this
            ->findOneBy([
                'email' => $email,
            ]);

        return ($user instanceof AbstractUserInterface)
            ? $user
            : null;
    }

    public function findOneByPhone($phone)
    {
        $user = $this
            ->findOneBy([
                'phone' => $phone,
            ]);

        return ($user instanceof AbstractUserInterface)
            ? $user
            : null;
    }
}