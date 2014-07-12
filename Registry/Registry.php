<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Registry;

use Tadcka\Component\Mapper\Config\Config;
use Tadcka\Component\Mapper\Config\Container;
use Tadcka\Component\Mapper\Loader\LoaderInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:26 PM
 */
class Registry implements RegistryInterface
{
    /**
     * @var Container
     */
    private $container;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->container = new Container();
    }

    /**
     * Register mapper config.
     *
     * @param LoaderInterface $loader
     */
    public function register(LoaderInterface $loader)
    {
        $loader->register($this);
    }

    /**
     * {@inheritdoc}
     */
    public function add(Config $config)
    {
        $this->container->add($config);
    }

    /**
     * Get config container.
     *
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }
}
