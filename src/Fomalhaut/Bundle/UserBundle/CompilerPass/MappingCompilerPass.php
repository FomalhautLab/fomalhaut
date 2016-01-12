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

namespace Fomalhaut\Bundle\UserBundle\CompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Fomalhaut\Bundle\CoreBundle\CompilerPass\Abstracts\AbstractFomalhautMappingCompilerPass;

/**
 * Class MappingCompilerPass
 */
class MappingCompilerPass extends AbstractFomalhautMappingCompilerPass
{
    /**
     * @param ContainerBuilder $container
     *
     * @api
     */
    public function process(ContainerBuilder $container)
    {
        $this
            ->addEntityMappings(
                $container,
                [
                    'abstract_user',
                    'user',
                    //todo:other entity mappings
                ]
            );
    }
}