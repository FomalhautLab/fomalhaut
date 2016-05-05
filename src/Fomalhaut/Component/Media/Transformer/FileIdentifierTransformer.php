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

namespace Fomalhaut\Component\Media\Transformer;

use Fomalhaut\Component\Media\Entity\Interfaces\FileInterface;
use Fomalhaut\Component\Media\Transformer\Interfaces\FileIdentifierTransformerInterface;

class FileIdentifierTransformer implements FileIdentifierTransformerInterface
{
    /**
     * Transforms an entity to be stored.
     *
     * @param FileInterface $file File to transform
     *
     * @return string Entity transformed
     */
    public function transform(FileInterface $file)
    {
        return $file->getId() . '.' .
        $file->getExtension();
    }
}