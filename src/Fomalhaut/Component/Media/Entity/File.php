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

use Fomalhaut\Component\Media\Entity\Abstracts\Media;
use Fomalhaut\Component\Media\Entity\Interfaces\FileInterface;

class File extends Media implements FileInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $contentType;

    /**
     * @var string
     */
    protected $extension;

    /**
     * @var string
     */
    protected $size;

    /**
     * @var string
     */
    protected $content;

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set Path
     *
     * @param string $path
     *
     * @return $this Self object
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get mime type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set mime type
     *
     * @param string $contentType
     *
     * @return $this Self object
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get the extension of file
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the extension of file
     *
     * @param string $extension
     *
     * @return $this Self object
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get file size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set file size
     *
     * @param string $size
     *
     * @return $this Self object
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get content of the file
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content of the file
     *
     * @param string $content
     *
     * @return $this Self object
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

}