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

namespace Fomalhaut\Component\User\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class UserRepository
 * @package Fomalhaut\Component\User\Repository
 */
class UserRepository extends EntityRepository
{
    public function findOneByUsername($username)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->getQuery()
            ->getResult();

        return $user;
    }

    public function findOneByEmail($email)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getResult();

        return $user;
    }

    public function findOneByPhone($phone)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.phone = :phone')
            ->setParameter('phone', $phone)
            ->getQuery()
            ->getResult();

        return $user;
    }
}