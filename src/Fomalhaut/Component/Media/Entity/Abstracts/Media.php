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

namespace Fomalhaut\Component\Media\Entity\Abstracts;

use Elcodi\Component\Core\Entity\Traits\DateTimeTrait;
use Elcodi\Component\Core\Entity\Traits\EnabledTrait;
use Elcodi\Component\Core\Entity\Traits\IdentifiableTrait;

use Fomalhaut\Component\Media\Entity\Interfaces\MediaInterface;

/**
 * Class Media
 * @package Fomalhaut\Component\Media\Entity\Abstracts
 */
abstract class Media implements MediaInterface
{
    use IdentifiableTrait,
        EnabledTrait,
        DateTimeTrait;

    /**
     * @var string
     *
     * Media name
     */
    protected $name;

    /**
     * The name of this media
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return $this Self object
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}