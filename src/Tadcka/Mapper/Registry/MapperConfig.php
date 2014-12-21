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

use Tadcka\Mapper\MapperTypeInterface;

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
     * @var MapperTypeInterface
     */
    private $mapperType;

    /**
     * Constructor.
     *
     * @param string $name
     * @param MapperTypeInterface $mapperType
     */
    public function __construct($name, MapperTypeInterface $mapperType)
    {
        $this->name = $name;
        $this->mapperType = $mapperType;
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
     * Get mapper item factory.
     *
     * @return MapperTypeInterface
     */
    public function getMapperType()
    {
        return $this->mapperType;
    }
}
