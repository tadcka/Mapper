<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry\Data;

use Tadcka\Mapper\Exception\ResourceNotFoundException;
use Tadcka\Mapper\Data\MapperDataFactoryInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/29/15 11:35 PM
 */
class MapperDataFactoryRegistry
{
    /**
     * @var array|MapperDataFactoryInterface[]
     */
    private $factories;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->factories = [];
    }

    public function add(MapperDataFactoryInterface $factory, $alias)
    {
        $this->factories[$alias] = $factory;
    }

    /**
     * Get mapper data factory.
     *
     * @param string $name
     *
     * @return MapperDataFactoryInterface
     *
     * @throws ResourceNotFoundException
     */
    public function getFactory($name)
    {
        if (isset($this->factories[$name])) {
            return $this->factories[$name];
        }

        throw new ResourceNotFoundException(sprintf('Mapper data factory %s not found!'), $name);
    }
}
