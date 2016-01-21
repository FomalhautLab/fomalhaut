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

namespace Fomalhaut\Component\User\Factory;

use Elcodi\Component\Core\Factory\Abstracts\AbstractFactory;
use Fomalhaut\Component\User\Entity\User;
use Fomalhaut\Component\User\FomalhautUserProperties;

/**
 * Class UserFactory
 * @package Fomalhaut\Component\User\Factory
 */
class UserFactory extends AbstractFactory
{
    /**
     * Creates an instance of an entity.
     *
     * This method must return always an empty instance
     *
     * @return User Empty entity
     */
    public function create()
    {
        /**
         * @var User $user
         */
        $classNamespace = $this->getEntityNamespace();
        $user = new $classNamespace();

        $user
            ->setGender(FomalhautUserProperties::GENDER_UNKNOWN);
            //todo:set other attributes of user

        return $user;
    }
}