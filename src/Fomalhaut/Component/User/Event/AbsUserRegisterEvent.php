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
 * Class AbsUserRegisterEvent
 * @package Fomalhaut\Component\User\Event
 */
class AbsUserRegisterEvent extends Event
{
    /**
     * @var AbstractUserInterface
     *
     * User
     */
    private $absUser;

    /**
     * Construct method.
     *
     * @param AbstractUserInterface $absUser User
     */
    public function __construct(AbstractUserInterface $absUser)
    {
        $this->absUser = $absUser;
    }

    /**
     * @return AbstractUserInterface User
     */
    public function getUser()
    {
        return $this->absUser;
    }
}