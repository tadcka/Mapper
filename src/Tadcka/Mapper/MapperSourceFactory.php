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

use Tadcka\Mapper\Data\MapperDataInterface;
use Tadcka\Mapper\Registry\Type\MapperTypeRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 12:19 AM
 */
class MapperSourceFactory
{
    /**
     * @var MapperTypeRegistry
     */
    private $typeRegistry;

    /**
     * Constructor.
     *
     * @param MapperTypeRegistry $typeRegistry
     */
    public function __construct(MapperTypeRegistry $typeRegistry)
    {
        $this->typeRegistry = $typeRegistry;
    }

    /**
     * Create mapper source.
     *
     * @param string|MapperTypeRegistry $type
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
