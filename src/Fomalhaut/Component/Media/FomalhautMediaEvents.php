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

namespace Fomalhaut\Component\Media;

/**
 * Class FomalhautMediaEvents
 * @package Fomalhaut\Component\Media
 */
final class FomalhautMediaEvents
{
    /**
     * This event is fired each time an image is going to be uploaded.
     *
     * event.name : image.preupload
     * event.class : ImageUploadEvent
     */
    const IMAGE_PREUPLOAD = 'image.preupload';

    /**
     * This event is fired each time an image has been uploaded.
     *
     * event.name : image.onupload
     * event.class : ImageUploadEvent
     */
    const IMAGE_ONUPLOAD = 'image.onupload';
}