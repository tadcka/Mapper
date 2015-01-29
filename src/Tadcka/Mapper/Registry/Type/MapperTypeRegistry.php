<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry\Type;

use Tadcka\Mapper\Exception\MapperTypeException;
use Tadcka\Mapper\Type\MapperTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/26/15 11:02 PM
 */
class MapperTypeRegistry
{
    /**
     * @var array|MapperTypeInterface[]
     */
    private $types;

    public function __construct()
    {
        $this->types = [];
    }

    /**
     * Add mapper source type.
     *
     * @param MapperTypeInterface $type
     * @param string $alias
     *
     * @throws MapperTypeException
     */
    public function add(MapperTypeInterface $type, $alias)
    {
        if ($alias !== $type->getName()) {
            throw new MapperTypeException(sprintf('Mapper type %s alias is not valid!', $alias));
        }

        $this->types[$alias] = $type;
    }

    /**
     * Get mapper source type by name.
     *
     * @param string $name
     *
     * @return MapperTypeInterface
     *
     * @throws MapperTypeException
     */
    public function getType($name)
    {
        if (isset($this->types[$name])) {
            return $this->types[$name];
        }

        throw new MapperTypeException(sprintf('Mapper type %s not found!', $name));
    }

    /**
     * Get mapper source types.
     *
     * @return array|MapperTypeInterface[]
     */
    public function getTypes()
    {
        return $this->types;
    }
}
