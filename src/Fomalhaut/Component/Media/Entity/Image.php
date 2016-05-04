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

namespace Fomalhaut\Component\Media\Entity;

use Fomalhaut\Component\Media\Entity\Interfaces\ImageInterface;

/**
 * Class Image
 * @package Fomalhaut\Component\Media\Entity
 */
class Image extends File implements ImageInterface
{
    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * Get the width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the width
     *
     * @param int $width
     *
     * @return $this Self object
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the height
     *
     * @param int $height
     *
     * @return $this Self object
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}