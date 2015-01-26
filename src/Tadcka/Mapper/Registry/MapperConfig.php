<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry;

use Tadcka\Mapper\MapperSourceFactoryInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:11 PM
 */
class MapperConfig
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var MapperSourceFactoryInterface
     */
    private $factory;

    /**
     * Constructor.
     *
     * @param string $name
     * @param MapperSourceFactoryInterface $factory
     */
    public function __construct($name, MapperSourceFactoryInterface $factory)
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
     * Get mapper source factory.
     *
     * @return MapperSourceFactoryInterface
     */
    public function getFactory()
    {
        return $this->factory;
    }
}
