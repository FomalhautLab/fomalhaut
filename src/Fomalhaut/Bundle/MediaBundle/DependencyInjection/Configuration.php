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

                ->arrayNode('images')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('generated_route_host')
                            ->defaultValue('')
                        ->end()
                        ->arrayNode('view')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->integerNode('max_age')
                                    ->defaultValue(7884000)
                                ->end()
                                ->integerNode('shared_max_age')
                                    ->defaultValue(7884000)
                                ->end()
                            ->end()
                        ->end()

                        ->arrayNode('upload')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('field_name')
                                    ->defaultValue('file')
                                ->end()
                            ->end()
                        ->end()

                        ->arrayNode('resize')
                            ->addDefaultsIfNotSet()
                            ->children()

                                /**
                                 * This elements should be defined as an enumValue.
                                 *
                                 * While only one element is defined,
                                 * defined as scalarNode
                                 */
                                ->scalarNode('adapter')
                                    ->defaultValue('fomalhaut.media_resize_adapter.gd')
                                ->end()
                                ->scalarNode('converter_bin_path')
                                    ->defaultValue('/usr/bin/convert')
                                ->end()
                                ->scalarNode('converter_default_profile')
                                    ->defaultValue('/usr/share/color/icc/colord/sRGB.icc')
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()

            ->end()
        ;
    }
}
