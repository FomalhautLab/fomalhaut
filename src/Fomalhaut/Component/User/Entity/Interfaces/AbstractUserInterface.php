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

namespace Fomalhaut\Component\User\Entity\Interfaces;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Interface AbstractUserInterface
 * @package Fomalhaut\Component\User\Entity\Interfaces
 */
Interface AbstractUserInterface
    extends UserInterface
{
    /**
     * Sets Firstname.
     *
     * @param string $firstname Firstname
     *
     * @return $this Self object
     */
    public function setFirstname($firstname);

    /**
     * Get Firstname.
     *
     * @return string Firstname
     */
    public function getFirstname();

    /**
     * Sets Lastname.
     *
     * @param string $lastname Lastname
     *
     * @return $this Self object
     */
    public function setLastname($lastname);

    /**
     * Get Lastname.
     *
     * @return string Lastname
     */
    public function getLastname();

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return $this Self object
     */
    public function setEmail($email);

    /**
     * Return email.
     *
     * @return string Email
     */
    public function getEmail();

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return $this Self object
     */
    public function setPassword($password);
}