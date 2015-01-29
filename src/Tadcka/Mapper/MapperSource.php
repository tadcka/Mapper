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
use Tadcka\Mapper\Exception\MapperSourceException;
use Tadcka\Mapper\Type\MapperTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/24/15 1:01 PM
 */
class MapperSource
{
    /**
     * @var MapperDataInterface
     */
    private $data;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $options;

    /**
     * @var MapperTypeInterface
     */
    private $type;

    /**
     * Constructor.
     *
     * @param MapperTypeInterface $type
     * @param MapperDataInterface $data
     * @param string $name
     *
     * @throws MapperSourceException
     */
    public function __construct(MapperTypeInterface $type, MapperDataInterface $data, $name)
    {
        $this->type = $type;
        $this->data = $data;
        $this->name = $name;

        $this->options = [];

        if (false === $this->supportData()) {
            throw new MapperSourceException(sprintf("Mapper source type %s don't support this data!", $type->getName()));
        }
    }

    /**
     * Get mapper source data.
     *
     * @return MapperDataInterface
     */
    public function getData()
    {
        return $this->data;
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
     * Set options.
     *
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * Get options.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Get mapper source type name.
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->type->getName();
    }

    /**
     * Check if mapper type support data.
     *
     * @return bool
     */
    private function supportData()
    {
        $dataClass = $this->type->getDataClass();

        return $this->data instanceof $dataClass || $dataClass === get_class($this->data);
    }
}
