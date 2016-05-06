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

namespace Fomalhaut\Component\Media\Adapter\Resizer\Interfaces;

use Fomalhaut\Component\Media\FomalhautMediaImageResizeTypes;

/**
 * Interface ResizeAdapterInterface
 * @package Fomalhaut\Component\Media\Adapter\Resizer\Interfaces
 */
interface ResizeAdapterInterface
{
    /**
     * Interface for resize implementations.
     *
     * @param string $imageData Image Data
     * @param int    $height    Height value
     * @param int    $width     Width value
     * @param int    $type      Type
     *
     * @return string Resized image data
     */
    public function resize(
        $imageData,
        $height,
        $width,
        $type = FomalhautMediaImageResizeTypes::FORCE_MEASURES
    );
}