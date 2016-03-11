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

use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;

/**
 * Event fired when a user password is recovered.
 *
 * This event send an email to customer
 */
final class PasswordRecoverEvent extends Event
{
    /**
     * @var AbstractUserInterface
     *
     * User
     */
    private $user;

    /**
     * Construct method.
     *
     * @param AbstractUserInterface $user User
     */
    public function __construct(AbstractUserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Get user.
     *
     * @return AbstractUserInterface User
     */
    public function getUser()
    {
        return $this->user;
    }
}