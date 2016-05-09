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

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Elcodi\Bundle\CoreBundle\DependencyInjection\Abstracts\AbstractExtension;

/**
 * Class FomalhautMediaExtension
 * @package Fomalhaut\Bundle\MediaBundle\DependencyInjection
 */
class FomalhautMediaExtension extends AbstractExtension
{
    /**
     * @var string
     *
     * Extension name
     */
    const EXTENSION_NAME = 'fomalhaut_media';

    /**
     * Get the Config file location.
     *
     * @return string Config file location
     */
    public function getConfigFilesLocation()
    {
        return __DIR__ . '/../Resources/config';
    }

    /**
     * Return a new Configuration instance.
     *
     * If object returned by this method is an instance of
     * ConfigurationInterface, extension will use the Configuration to read all
     * bundle config definitions.
     *
     * Also will call getParametrizationValues method to load some config values
     * to internal parameters.
     *
     * @return ConfigurationInterface Configuration file
     */
    protected function getConfigurationInstance()
    {
        return new Configuration(static::EXTENSION_NAME);
    }

    /**
     * Load Parametrization definition.
     *
     * return array(
     *      'parameter1' => $config['parameter1'],
     *      'parameter2' => $config['parameter2'],
     *      ...
     * );
     *
     * @param array $config Bundles config values
     *
     * @return array Parametrization values
     */
    protected function getParametrizationValues(array $config)
    {
        return [
            'fomalhaut.entity.image.class' => $config['mapping']['image']['class'],
            'fomalhaut.entity.image.mapping_file' => $config['mapping']['image']['mapping_file'],
            'fomalhaut.entity.image.manager' => $config['mapping']['image']['manager'],
            'fomalhaut.entity.image.enabled' => $config['mapping']['image']['enabled'],

            'fomalhaut.media_filesystem_service' => $config['filesystem'],

            'fomalhaut.image_generated_route_host' => $config['images']['generated_route_host'],
            'fomalhaut.image_view_max_age' => $config['images']['view']['max_age'],
            'fomalhaut.image_view_shared_max_age' => $config['images']['view']['shared_max_age'],
            'fomalhaut.image_upload_field_name' => $config['images']['upload']['field_name'],
            
            'fomalhaut.image_resize_converter_bin_path' => $config['images']['resize']['converter_bin_path'],
            'fomalhaut.image_resize_converter_default_profile' => $config['images']['resize']['converter_default_profile'],
            //todo:other parametrization definition
        ];
    }

    /**
     * Config files to load.
     *
     * @param array $config Configuration
     *
     * @return array Config files
     */
    public function getConfigFiles(array $config)
    {
        return [
            //todo:ConfigFiles
            'services',
            'repositories',
            'transformers',
            'adapters',
            'eventDispatchers',
            'factories',
            'objectManagers',
        ];
    }


    /**
     * Post load implementation.
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     * @param array            $config    Parsed configuration
     */
    protected function postLoad(array $config, ContainerBuilder $container)
    {
        parent::postLoad($config, $container);

        $container->setAlias(
            'fomalhaut.media_filesystem',
            $container->getParameter('fomalhaut.media_filesystem_service')
        );

        $container->setAlias(
            'fomalhaut.media_resize_adapter',
            $config['images']['resize']['adapter']
        );
    }

    /**
     * @return array
     */
    public function getEntitiesOverrides()
    {
        return [
            //todo:'Fomalhaut\Component\____\Entity\Interfaces\___Interface' => 'fomalhaut.entity.___.class',
            'Fomalhaut\Component\Media\Entity\Interfaces\ImageInterface' => 'fomalhaut.entity.image.class',
        ];
    }

    /**
     * Returns the extension alias, same value as extension name.
     *
     * @return string The alias
     */
    public function getAlias()
    {
        return static::EXTENSION_NAME;
    }
}
