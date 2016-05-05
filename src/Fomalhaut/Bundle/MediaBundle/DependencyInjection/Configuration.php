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

namespace Fomalhaut\Bundle\MediaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

use Elcodi\Bundle\CoreBundle\DependencyInjection\Abstracts\AbstractConfiguration;

/**
 * Class Configuration
 * @package Fomalhaut\Bundle\MediaBundle\DependencyInjection
 */
class Configuration extends AbstractConfiguration
{
    /**
     * {@inheritdoc}
     */
    protected function setupTree(ArrayNodeDefinition $rootNode)
    {
        $rootNode
            ->children()
                ->arrayNode('mapping')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->append($this->addMappingNode(
                            'image',
                            'Fomalhaut\Component\Media\Entity\Image',
                            '@FomalhautMediaBundle/Resources/config/doctrine/Image.orm.yml',
                            'default',
                            true
                        ))
                    ->end()
                ->end()

                ->scalarNode('filesystem')
                    ->defaultValue('bootes_app.adapters.meida_adapter_qiniu')
                    //todo:->defaultValue('gaufrette.local_filesystem')
                ->end()
            ->end()
        ;
    }
}
