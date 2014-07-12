<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Registry\Config;

use Tadcka\Component\Mapper\MapperFactoryInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:27 PM
 */
class Config
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var MapperFactoryInterface
     */
    private $factory;

    /**
     * Constructor.
     *
     * @param string $name
     * @param MapperFactoryInterface $factory
     */
    public function __construct($name, MapperFactoryInterface $factory)
    {
        $this->name = $name;
        $this->factory = $factory;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get factory.
     *
     * @return MapperFactoryInterface
     */
    public function getFactory()
    {
        return $this->factory;
    }
}
