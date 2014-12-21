<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry\Config;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:28 PM
 */
class Container
{
    /**
     * @var array|Config[]
     */
    private $configs = array();

    /**
     * Add config.
     *
     * @param Config $config
     */
    public function add(Config $config)
    {
        $this->configs[$config->getName()] = $config;
    }

    /**
     * Get config by name.
     *
     * @param string $name
     *
     * @return null|Config
     */
    public function get($name)
    {
        if ($this->has($name)) {
            return $this->configs[$name];
        }

        return null;
    }

    /**
     * Check or has config by name.
     *
     * @param string$name
     *
     * @return bool
     */
    public function has($name)
    {
        return isset($this->configs[$name]);
    }

    /**
     * All configs.
     *
     * @return array|Config[]
     */
    public function all()
    {
        return $this->configs;
    }
}
