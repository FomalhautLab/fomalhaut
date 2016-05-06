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

namespace Fomalhaut\Component\Media\Event;

use Symfony\Component\EventDispatcher\Event;

use Fomalhaut\Component\Media\Entity\Interfaces\ImageInterface;

/**
 * Class ImageUploadedEvent
 * @package Fomalhaut\Component\Media\Event
 */
final class ImageUploadedEvent extends Event
{
    /**
     * @var ImageInterface
     *
     * Image
     */
    private $image;

    /**
     * Construct.
     *
     * @param ImageInterface $image Image
     */
    public function __construct(ImageInterface $image)
    {
        $this->image = $image;
    }

    /**
     * Get image.
     *
     * @return ImageInterface Image
     */
    public function getImage()
    {
        return $this->image;
    }
}