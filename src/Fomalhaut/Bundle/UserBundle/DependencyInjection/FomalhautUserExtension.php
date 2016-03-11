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

namespace Fomalhaut\Bundle\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;

use Elcodi\Bundle\CoreBundle\DependencyInjection\Abstracts\AbstractExtension;
use Elcodi\Bundle\CoreBundle\DependencyInjection\Interfaces\EntitiesOverridableExtensionInterface;

/**
 * Class FomalhautUserExtension
 * @package Fomalhaut\Bundle\UserBundle\DependencyInjection
 */
class FomalhautUserExtension extends AbstractExtension implements EntitiesOverridableExtensionInterface
{
    /**
     * @var string
     *
     * Extension name
     */
    const EXTENSION_NAME = 'fomalhaut_user';

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
            'fomalhaut.entity.abstract_user.class' => $config['mapping']['abstract_user']['class'],
            'fomalhaut.entity.abstract_user.mapping_file' => $config['mapping']['abstract_user']['mapping_file'],
            'fomalhaut.entity.abstract_user.manager' => $config['mapping']['abstract_user']['manager'],
            'fomalhaut.entity.abstract_user.enabled' => $config['mapping']['abstract_user']['enabled'],

            'fomalhaut.entity.user.class' => $config['mapping']['user']['class'],
            'fomalhaut.entity.user.mapping_file' => $config['mapping']['user']['mapping_file'],
            'fomalhaut.entity.user.manager' => $config['mapping']['user']['manager'],
            'fomalhaut.entity.user.enabled' => $config['mapping']['user']['enabled'],

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
            'providers',
            'factories',
            'repositories',
            'objectManagers',
            'directors',
            'eventDispatchers',
            'services',
        ];
    }

    /**
     * @return array
     */
    public function getEntitiesOverrides()
    {
        return [
            //todo:'Fomalhaut\Component\____\Entity\Interfaces\___Interface' => 'fomalhaut.entity.___.class',
            'Fomalhaut\Component\User\Entity\Interfaces\UserInterface' => 'fomalhaut.entity.user.class',
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
