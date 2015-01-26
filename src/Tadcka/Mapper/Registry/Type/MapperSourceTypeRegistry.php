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

use Tadcka\Mapper\Exception\MapperSourceTypeException;
use Tadcka\Mapper\MapperSourceTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/26/15 11:02 PM
 */
class MapperSourceTypeRegistry
{
    /**
     * @var array|MapperSourceTypeInterface[]
     */
    private $types;

    public function __construct()
    {
        $this->types = [];
    }

    /**
     * Add mapper source type.
     *
     * @param MapperSourceTypeInterface $type
     * @param string $alias
     *
     * @throws MapperSourceTypeException
     */
    public function add(MapperSourceTypeInterface $type, $alias)
    {
        if ($alias !== $type->getName()) {
            throw new MapperSourceTypeException(sprintf('Mapper source type %s alias is not valid!', $alias));
        }

        $this->types[$alias] = $type;
    }


    /**
     * Get mapper source type by name.
     *
     * @param string $name
     *
     * @return MapperSourceTypeInterface
     *
     * @throws MapperSourceTypeException
     */
    public function getType($name)
    {
        if (isset($this->types[$name])) {
            return $this->types[$name];
        }

        throw new MapperSourceTypeException(sprintf('Mapper source type %s not found!', $name));
    }

    /**
     * Get mapper source types.
     *
     * @return array|MapperSourceTypeInterface[]
     */
    public function getTypes()
    {
        return $this->types;
    }
}
