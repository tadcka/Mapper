<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Source;

use Tadcka\Mapper\Exception\SourceException;
use Tadcka\Mapper\ParameterBag;
use Tadcka\Mapper\Source\Data\SourceDataFactoryInterface;
use Tadcka\Mapper\Source\Data\SourceDataInterface;
use Tadcka\Mapper\Source\Type\SourceTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/24/15 1:01 PM
 */
class Source
{
    /**
     * @var SourceDataInterface
     */
    private $data;

    /**
     * @var SourceDataFactoryInterface
     */
    private $dataFactory;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $options;

    /**
     * @var SourceTypeInterface
     */
    private $type;

    /**
     * Constructor.
     *
     * @param SourceTypeInterface $type
     * @param SourceDataFactoryInterface $dataFactory
     * @param string $name
     */
    public function __construct(SourceTypeInterface $type, SourceDataFactoryInterface $dataFactory, $name)
    {
        $this->type = $type;
        $this->dataFactory = $dataFactory;
        $this->name = $name;

        $this->options = [];
    }

    /**
     * Get mapper source data.
     *
     * @return SourceDataInterface
     *
     * @throws SourceException
     */
    public function getData()
    {
        if (null === $this->data) {
            $this->data = $this->dataFactory->create(new ParameterBag($this->options));

            if (false === $this->supportData()) {
                throw new SourceException(
                    sprintf("Mapper source type %s don't support this data!", $this->getTypeName())
                );
            }
        }

        return $this->data;
    }

    /**
     * Get data factory name.
     *
     * @return string
     */
    public function getDataFactoryName()
    {
        return $this->dataFactory->getName();
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
