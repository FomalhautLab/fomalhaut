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

namespace Fomalhaut\Component\User\EventDispatcher\Interfaces;

use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;
use Fomalhaut\Component\User\Entity\Interfaces\UserInterface;

/**
 * Interface UserEventDispatcherInterface
 * @package Fomalhaut\Component\User\EventDispatcher\Interfaces
 */
interface UserEventDispatcherInterface
{
    /**
     * Dispatch user created event.
     *
     * @param AbstractUserInterface $absUser User registered
     *
     * @return $this Self object
     */
    public function dispatchOnAbsUserRegisteredEvent(AbstractUserInterface $absUser);

    /**
     * Dispatch customer created event.
     *
     * @param UserInterface $user Customer registered
     *
     * @return $this Self object
     */
    public function dispatchOnUserRegisteredEvent(UserInterface $user);
}