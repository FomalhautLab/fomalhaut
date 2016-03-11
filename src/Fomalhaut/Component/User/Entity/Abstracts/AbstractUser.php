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
     * Username
     */
    protected $username;

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
     * Phone
     */
    protected $phone;

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
     * @var int
     *
     * gender
     */
    protected $gender;


    /**
     * @var string
     *
     * Recovery hash
     */
    protected $recoveryHash;

    /**
     * Get username.
     *
     * @return string Username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username.
     *
     * @param string $username Username
     *
     * @return $this Self object
     */
    public function setUsername($username)
    {
        if (null === $username) {
            return $this;
        }

        $this->username = $username;

        return $this;
    }

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
     * Set phone.
     *
     * @param string $phone Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
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
        if (null === $firstname) {
            return $this;
        }

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
        if (null === $lastname) {
            return $this;
        }

        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return int Gender
     */
    public function getGender()
    {
        return (int) $this->gender;
    }

    /**
     * Set gender.
     *
     * @param int $gender Gender
     *
     * @return $this Self object
     */
    public function setGender($gender)
    {
        $this->gender = (int) $gender;

        return $this;
    }

    /**
     * Get recovery hash.
     *
     * @return string Recovery Hash
     */
    public function getRecoveryHash()
    {
        return $this->recoveryHash;
    }

    /**
     * Set recovery hash.
     *
     * @param string $recoveryHash
     *
     * @return $this Self object
     */
    public function setRecoveryHash($recoveryHash)
    {
        $this->recoveryHash = $recoveryHash;

        return $this;
    }
}