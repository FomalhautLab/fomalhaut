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

namespace Fomalhaut\Component\User\EventDispatcher;

use Elcodi\Component\Core\EventDispatcher\Abstracts\AbstractEventDispatcher;
use Fomalhaut\Component\User\EventDispatcher\Interfaces\UserEventDispatcherInterface;
use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;
use Fomalhaut\Component\User\Entity\Interfaces\UserInterface;
use Fomalhaut\Component\User\Event\AbsUserRegisterEvent;
use Fomalhaut\Component\User\Event\UserRegisterEvent;
use Fomalhaut\Component\User\FomalhautUserEvents;

/**
 * Class UserEventDispatcher
 * @package Fomalhaut\Component\User\EventDispatcher
 */
class UserEventDispatcher extends AbstractEventDispatcher implements UserEventDispatcherInterface
{
    /**
     * Dispatch user created event.
     *
     * @param AbstractUserInterface $absUser User registered
     *
     * @return $this Self object
     */
    public function dispatchOnAbsUserRegisteredEvent(AbstractUserInterface $absUser)
    {
        $event = new AbsUserRegisterEvent($absUser);
        $this
            ->eventDispatcher
            ->dispatch(
                FomalhautUserEvents::ABSTRACTUSER_REGISTER,
                $event
            );

        return $this;
    }

    /**
     * Dispatch customer created event.
     *
     * @param UserInterface $user Customer registered
     *
     * @return $this Self object
     */
    public function dispatchOnUserRegisteredEvent(UserInterface $user)
    {
        $event = new UserRegisterEvent($user);
        $this
            ->eventDispatcher
            ->dispatch(
                FomalhautUserEvents::USER_REGISTER,
                $event
            );

        return $this;
    }
}