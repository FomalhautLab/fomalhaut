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
 * Interface FileInterface
 * @package Fomalhaut\Component\Media\Entity\Interfaces
 */
interface FileInterface extends MediaInterface
{
    /**
     * Get path
     *
     * @return string
     */
    public function getPath();

    /**
     * Set Path
     *
     * @param string $path
     *
     * @return $this Self object
     */
    public function setPath($path);

    /**
     * Get mime type
     *
     * @return string
     */
    public function getContentType();

    /**
     * Set mime type
     *
     * @param string $contentType
     *
     * @return $this Self object
     */
    public function setContentType($contentType);

    /**
     * Get the extension of file
     *
     * @return string
     */
    public function getExtension();

    /**
     * Set the extension of file
     *
     * @param string $extension
     *
     * @return $this Self object
     */
    public function setExtension($extension);

    /**
     * Get file size
     *
     * @return string
     */
    public function getSize();

    /**
     * Set file size
     *
     * @param string $size
     *
     * @return $this Self object
     */
    public function setSize($size);

    /**
     * Get content of the file
     *
     * @return string
     */
    public function getContent();

    /**
     * Set content of the file
     *
     * @param string $content
     *
     * @return $this Self object
     */
    public function setContent($content);

}