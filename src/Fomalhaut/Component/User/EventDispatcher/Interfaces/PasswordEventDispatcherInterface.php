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

namespace Fomalhaut\Component\User\EventDispatcher\Interfaces;

use Fomalhaut\Component\User\Entity\Interfaces\AbstractUserInterface;

interface PasswordEventDispatcherInterface
{
    /**
     * @param AbstractUserInterface $user
     * @param string                $recoverUrl
     *
     * @return $this Self object
     */
    public function dispatchOnPasswordRememberEvent(
        AbstractUserInterface $user,
        $recoverUrl
    );

    /**
     * @param AbstractUserInterface $user
     *
     * @return $this Self object
     */
    public function dispatchOnPasswordRecoverEvent(AbstractUserInterface $user);
}