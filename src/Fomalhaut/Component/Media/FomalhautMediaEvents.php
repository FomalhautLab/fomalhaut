<?php
/**
 * Created by PhpStorm.
 * User: shuo
 * Date: 16-5-6
 * Time: 下午4:24
 */

namespace Fomalhaut\Component\Media;


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