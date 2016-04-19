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

namespace Fomalhaut\Component\Media\Adapter;

use Gaufrette\Adapter;
use Qiniu\Auth as QiniuAuth;

class Qiniu implements Adapter
{
    /**
     * @var QiniuAuth
     */
    protected $qiniuAuth;

    /**
     * {@inheritDoc}
     */
    public function read($key)
    {
        // TODO: Implement write() method.
    }

    /**
     * {@inheritdoc}
     */
    public function write($key, $content)
    {
        // TODO: Implement write() method.
    }

    /**
     * {@inheritdoc}
     */
    public function exists($key)
    {
        // TODO: Implement exists() method.
    }

    /**
     * {@inheritdoc}
     */
    public function keys()
    {
        // TODO: Implement keys() method.
    }

    /**
     * {@inheritdoc}
     */
    public function mtime($key)
    {
        // TODO: Implement mtime() method.
    }

    /**
     * {@inheritdoc}
     */
    public function delete($key)
    {
        // TODO: Implement delete() method.
    }

    /**
     * {@inheritdoc}
     */
    public function rename($sourceKey, $targetKey)
    {
        // TODO: Implement rename() method.
    }

    public function isDirectory($key)
    {
        // TODO: Implement isDirectory() method.
    }
}