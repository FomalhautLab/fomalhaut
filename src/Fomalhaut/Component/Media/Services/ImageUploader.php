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

namespace Fomalhaut\Component\Media\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\Common\Persistence\ObjectManager;

use Fomalhaut\Component\Media\EventDispatcher\MediaEventDispatcher;
use Fomalhaut\Component\Media\Entity\Interfaces\ImageInterface;
use Fomalhaut\Component\Media\Exception\InvalidImageException;

/**
 * Class ImageUploader
 * @package Fomalhaut\Component\Media\Services
 */
class ImageUploader
{
    /**
     * @var ImageManager
     *
     * Image Manager
     */
    private $imageManager;

    /**
     * @var FileManager
     *
     * File Manager
     */
    private $fileManager;

    /**
     * @var MediaEventDispatcher
     *
     * Media event dispatcher
     */
    private $mediaEventDispatcher;

    /**
     * Construct method.
     *
     * @param ObjectManager        $imageObjectManager   Image Object Manager
     * @param FileManager          $fileManager          File Manager
     * @param ImageManager         $imageManager         Image Manager
     * @param MediaEventDispatcher $mediaEventDispatcher Media event dispatcher
     */
    public function __construct(
        ObjectManager $imageObjectManager,
        FileManager $fileManager,
        ImageManager $imageManager,
        MediaEventDispatcher $mediaEventDispatcher
    ) {
        $this->imageObjectManager = $imageObjectManager;
        $this->fileManager = $fileManager;
        $this->imageManager = $imageManager;
        $this->mediaEventDispatcher = $mediaEventDispatcher;
    }

    /**
     * Upload an image.
     *
     * @param UploadedFile $file File to upload
     *
     * @return ImageInterface|null Uploaded image or false is error
     *
     * @throws InvalidImageException File is not an image
     */
    public function uploadImage(UploadedFile $file)
    {
        $image = $this
            ->imageManager
            ->createImage($file);

        $this
            ->mediaEventDispatcher
            ->dispatchImagePreUploadEvent($image);

        $this->imageObjectManager->persist($image);
        $this->imageObjectManager->flush($image);

        $this->fileManager->uploadFile(
            $image,
            file_get_contents($file->getRealPath()),
            true
        );

        $this
            ->mediaEventDispatcher
            ->dispatchImageOnUploadEvent($image);

        return $image;
    }
}