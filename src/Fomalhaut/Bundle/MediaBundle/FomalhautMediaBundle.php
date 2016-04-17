<?php

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
