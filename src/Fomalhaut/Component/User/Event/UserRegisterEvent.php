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

namespace Fomalhaut\Component\User\Event;

use Symfony\Component\EventDispatcher\Event;

use Fomalhaut\Component\User\Entity\Interfaces\UserInterface;

/**
 * Class UserRegisterEvent
 * Event fired when a user registers.
 */
class UserRegisterEvent extends Event
{
    /**
     * @var UserInterface
     *
     * User
     */
    private $user;

    /**
     * Construct method.
     *
     * @param UserInterface $user User
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserInterface User
     */
    public function getUser()
    {
        return $this->user;
    }
}