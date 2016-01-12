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

namespace Fomalhaut\Bundle\UserBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\KernelInterface;

use Mmoreram\SymfonyBundleDependencies\DependentBundleInterface;
use Elcodi\Bundle\CoreBundle\Abstracts\AbstractElcodiBundle;

use Fomalhaut\Bundle\UserBundle\CompilerPass\MappingCompilerPass;
use Fomalhaut\Bundle\UserBundle\DependencyInjection\FomalhautUserExtension;

/**
 * FomalhautUserBundle Bundle.
 */
class FomalhautUserBundle extends AbstractElcodiBundle implements DependentBundleInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MappingCompilerPass());
    }

    /**
     * @return FomalhautUserExtension
     */
    public function getContainerExtension()
    {
        return new FomalhautUserExtension();
    }

    /**
     * @param KernelInterface $kernel
     * @return array Bundle instances
     */
    public static function getBundleDependencies(KernelInterface $kernel)
    {
        return [
            //todo:return bundle dependencies
        ];
    }
}
