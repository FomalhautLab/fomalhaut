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

namespace Fomalhaut\Component\User\Entity;

use Symfony\Component\Security\Core\Role\Role;

use Fomalhaut\Component\User\Entity\Abstracts\AbstractUser;
use Fomalhaut\Component\User\Entity\Interfaces\UserInterface;

class User extends AbstractUser implements UserInterface
{
    protected $id;

    /**
     * User roles.
     *
     * @return string[] Roles
     */
    public function getRoles()
    {
        return [
            new Role('ROLE_USER'),
        ];
    }
}