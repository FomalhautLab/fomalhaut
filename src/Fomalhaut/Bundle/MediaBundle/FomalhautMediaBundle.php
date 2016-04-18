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

namespace Fomalhaut\Bundle\MediaBundle;

use Elcodi\Bundle\CoreBundle\Abstracts\AbstractElcodiBundle;

use Fomalhaut\Bundle\MediaBundle\DependencyInjection\FomalhautMediaExtension;

class FomalhautMediaBundle extends AbstractElcodiBundle
{
    /**
     * @return FomalhautMediaExtension
     */
    public function getContainerExtension()
    {
        return new FomalhautMediaExtension();
    }
}
