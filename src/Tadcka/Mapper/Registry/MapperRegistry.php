<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:26 PM
 */
class MapperRegistry implements MapperRegistryInterface
{
    /**
     * @var array|MapperConfig[]
     */
    private $configs;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->configs = [];
    }

    /**
     * Register mapper config.
     *
     * @param MapperRegistryLoaderInterface $loader
     */
    public function register(MapperRegistryLoaderInterface $loader)
    {
        $loader->register($this);
    }

    /**
     * {@inheritdoc}
     */
    public function add(MapperConfig $config)
    {
        $this->configs[$config->getName()] = $config;
    }

    /**
     * Get config.
     *
     * @param string $name
     *
     * @return null|MapperConfig
     */
    public function getConfig($name)
    {
        if (isset($this->configs[$name])) {
            return $this->configs[$name];
        }

        return null;
    }

    /**
     * Get configs.
     *
     * @return array|MapperConfig[]
     */
    public function getConfigs()
    {
        return $this->configs;
    }
}
