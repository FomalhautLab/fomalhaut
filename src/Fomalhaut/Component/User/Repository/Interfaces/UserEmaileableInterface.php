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

namespace Fomalhaut\Component\User\Repository\Interfaces;

use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;

/**
 * Interface UserEmaileableInterface
 * @package Fomalhaut\Component\User\Repository\Interfaces
 */
interface UserEmaileableInterface
{
    /**
     * Find one Entity given an email.
     *
     * @param string $email Email
     *
     * @return AbstractUserInterface|null User found
     */
    public function findOneByEmail($email);
}