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

namespace Fomalhaut\Component\User\EventListener;

use Fomalhaut\Component\User\Entity\Interfaces\UserInterface;
use Fomalhaut\Component\User\EventListener\Abstracts\AbstractPasswordEventListener;

/**
 * Class CustomerPasswordEventListener.
 */
class UserPasswordEventListener extends AbstractPasswordEventListener
{
    /**
     * Check entity type.
     *
     * @param $entity Object Entity to check
     *
     * @return bool Entity is ready for being encoded
     */
    public function checkEntityType($entity)
    {
        return $entity instanceof UserInterface;
    }
}
