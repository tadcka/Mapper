<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper;

use Tadcka\Mapper\Registry\Type\MapperSourceTypeRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 12:19 AM
 */
class MapperSourceFactory
{
    /**
     * @var MapperSourceTypeRegistry
     */
    private $typeRegistry;

    /**
     * Constructor.
     *
     * @param MapperSourceTypeRegistry $typeRegistry
     */
    public function __construct(MapperSourceTypeRegistry $typeRegistry)
    {
        $this->typeRegistry = $typeRegistry;
    }

    /**
     * Create mapper source.
     *
     * @param string|MapperSourceTypeInterface $type
     * @param MapperDataInterface $data
     * @param string $name
     *
     * @return MapperSource
     */
    public function create($type, MapperDataInterface $data, $name)
    {
        if (is_string($type)) {
            $type = $this->typeRegistry->getType($type);
        }

        return new MapperSource($type, $data, $name);
    }
}
