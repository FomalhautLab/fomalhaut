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

namespace Fomalhaut\Component\User;

/**
 * Class FomalhautUserEvents
 * @package Fomalhaut\Component\User
 */
class FomalhautUserEvents
{
    /**
     * This event is fired when a user is registered.
     *
     * event.name : abs_user.register
     * event.class : AbsUserRegisterEvent
     */
    const ABSTRACTUSER_REGISTER = 'abs_user.register';

    /**
     * This event is fired when customer is registered into the web.
     *
     * event.name : user.register
     * event.class : UserRegisterEvent
     */
    const USER_REGISTER = 'user.register';

    /**
     * This event is fired when user wants to remember his password.
     *
     * event.name : password.remember
     * event.class : PasswordRememberEvent
     */
    const PASSWORD_REMEMBER = 'password.remember';

    /**
     * This event is fired when customer wants to recover his password.
     *
     * event.name : password.recover
     * event.class : PasswordRecoverEvent
     */
    const PASSWORD_RECOVER = 'password.recover';
}