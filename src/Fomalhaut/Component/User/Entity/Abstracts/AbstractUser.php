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

namespace Fomalhaut\Component\User\Entity\Abstracts;

use Symfony\Component\Security\Core\Role\Role;

use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;

class AbstractUser implements AbstractUserInterface
{
    /**
     * @var string
     *
     * Password
     */
    protected $password;

    /**
     * @var string
     *
     * Email
     */
    protected $email;

    /**
     * @var string
     *
     * Token
     */
    protected $token;

    /**
     * @var string
     *
     * FirstName
     */
    protected $firstname;

    /**
     * @var string
     *
     * LastName
     */
    protected $lastname;

    /**
     * User roles.
     *
     * @return string[] Roles
     */
    public function getRoles()
    {
        return [
            new Role('IS_AUTHENTICATED_ANONYMOUSLY'),
        ];
    }

    /**
     * Part of UserInterface. Dummy.
     *
     * @return string
     */
    public function getSalt()
    {
        return '';
    }

    /**
     * Get username.
     *
     * @return string Username
     */
    public function getUsername()
    {
        return $this->email;
    }

    /**
     * Dummy function, returns empty string.
     *
     * @return string
     */
    public function eraseCredentials()
    {
        return '';
    }

    /**
     * Get password.
     *
     * @return string Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password.
     *
     * @param string $password Password
     *
     * @return $this Self object
     */
    public function setPassword($password)
    {
        if (null === $password) {
            return $this;
        }

        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }
}