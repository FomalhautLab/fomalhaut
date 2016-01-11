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

namespace Fomalhaut\Bundle\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FomalhautCoreBundle extends Bundle
{
    public function getParent()
    {
        return 'ElcodiCoreBundle';
    }
}
