<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Source\Data;

use Tadcka\Mapper\ParameterBag;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 2/4/15 11:59 PM
 */
class SourceDataProvider
{
    /**
     * @var SourceDataFactoryRegistry
     */
    private $factoryRegistry;

    /**
     * @var array
     */
    private $data = [];

    /**
     * Constructor.
     *
     * @param SourceDataFactoryRegistry $dataFactoryRegistry
     */
    public function __construct(SourceDataFactoryRegistry $factoryRegistry)
    {
        $this->factoryRegistry = $factoryRegistry;
    }

    /**
     * Get mapper source data.
     *
     * @param string $name
     * @param array $options
     *
     * @return SourceDataInterface
     */
    public function getData($name, array $options = [])
    {
        if (false === isset($this->data[$name])) {

            $this->data[$name] = $this->factoryRegistry->getFactory($name)->create(new ParameterBag($options));
        }

        return $this->data[$name];
    }
}
