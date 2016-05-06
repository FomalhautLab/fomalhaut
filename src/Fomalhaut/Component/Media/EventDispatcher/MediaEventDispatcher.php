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

namespace Fomalhaut\Component\Media\EventDispatcher;

use Elcodi\Component\Core\EventDispatcher\Abstracts\AbstractEventDispatcher;
use Fomalhaut\Component\Media\Entity\Interfaces\ImageInterface;
use Fomalhaut\Component\Media\Event\ImageUploadedEvent;
use Fomalhaut\Component\Media\FomalhautMediaEvents;

class MediaEventDispatcher extends AbstractEventDispatcher
{
    /**
     * Create image pre uploaded event.
     *
     * @param ImageInterface $image Image
     *
     * @return $this self Object
     */
    public function dispatchImagePreUploadEvent(ImageInterface $image)
    {
        $imageUploadedEvent = new ImageUploadedEvent($image);

        $this->eventDispatcher->dispatch(
            FomalhautMediaEvents::IMAGE_PREUPLOAD,
            $imageUploadedEvent
        );

        return $this;
    }

    /**
     * Create image on uploaded event.
     *
     * @param ImageInterface $image Image
     *
     * @return $this self Object
     */
    public function dispatchImageOnUploadEvent(ImageInterface $image)
    {
        $imageUploadedEvent = new ImageUploadedEvent($image);

        $this->eventDispatcher->dispatch(
            FomalhautMediaEvents::IMAGE_ONUPLOAD,
            $imageUploadedEvent
        );

        return $this;
    }
}