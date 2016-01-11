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

namespace Fomalhaut\Bundle\CoreBundle\CompilerPass\Abstracts;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Mmoreram\SimpleDoctrineMapping\CompilerPass\Abstracts\AbstractMappingCompilerPass;

/**
 * Class AbstractFomalhautMappingCompilerPass
 * @package Fomalhaut\Bundle\CoreBundle\CompilerPass\Abstracts
 */
abstract class AbstractFomalhautMappingCompilerPass extends AbstractMappingCompilerPass
{
    /**
     * Add entity mapping given the entity name, given that all entity
     * definitions are built the same way and given as well that the method
     * addEntityMapping exists and is accessible.
     *
     * @param ContainerBuilder $container Container
     * @param array            $entities  Name of the entities
     *
     * @return $this Self object
     */
    protected function addEntityMappings(
        ContainerBuilder $container,
        array $entities
    ) {
        foreach ($entities as $entity) {
            $this
                ->addEntityMapping(
                    $container,
                    'fomalhaut.entity.' . $entity . '.manager',
                    'fomalhaut.entity.' . $entity . '.class',
                    'fomalhaut.entity.' . $entity . '.mapping_file',
                    'fomalhaut.entity.' . $entity . '.enabled'
                );
        }

        return $this;
    }
}