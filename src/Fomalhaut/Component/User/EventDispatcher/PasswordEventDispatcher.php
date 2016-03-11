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

use Fomalhaut\Component\User\EventDispatcher\Interfaces\PasswordEventDispatcherInterface;
use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;
use Fomalhaut\Component\User\Event\PasswordRememberEvent;
use Fomalhaut\Component\User\Event\PasswordRecoverEvent;
use Fomalhaut\Component\User\FomalhautUserEvents;

class PasswordEventDispatcher extends AbstractEventDispatcher implements PasswordEventDispatcherInterface
{
    /**
     * Dispatch password remember event.
     *
     * @param AbstractUserInterface $user       User
     * @param string                $recoverUrl Recover url
     *
     * @return $this Self object
     */
    public function dispatchOnPasswordRememberEvent(
        AbstractUserInterface $user,
        $recoverUrl
    )
    {
        $event = new PasswordRememberEvent($user, $recoverUrl);

        $this
            ->eventDispatcher
            ->dispatch(
                FomalhautUserEvents::PASSWORD_REMEMBER,
                $event
            );
    }

    /**
     * Dispatch password recover event.
     *
     * @param AbstractUserInterface $user User
     *
     * @return $this Self object
     */
    public function dispatchOnPasswordRecoverEvent(AbstractUserInterface $user)
    {
        $event = new PasswordRecoverEvent($user);

        $this
            ->eventDispatcher
            ->dispatch(
                FomalhautUserEvents::PASSWORD_RECOVER,
                $event
            );
    }
}