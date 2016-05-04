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

namespace Fomalhaut\Component\Media\Entity\Interfaces;

/**
 * Interface ImageInterface
 * @package Fomalhaut\Component\Media\Entity\Interfaces
 */
interface ImageInterface extends FileInterface
{
    /**
     * Get the width
     *
     * @return int
     */
    public function getWidth();

    /**
     * Set the width
     *
     * @param int $width
     *
     * @return $this Self object
     */
    public function setWidth($width);

    /**
     * Get the height
     *
     * @return int
     */
    public function getHeight();

    /**
     * Set the height
     *
     * @param int $height
     * 
     * @return $this Self object
     */
    public function setHeight($height);
}