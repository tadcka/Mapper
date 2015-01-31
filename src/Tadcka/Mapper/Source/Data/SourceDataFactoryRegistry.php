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

use Tadcka\Mapper\Exception\SourceDataException;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/29/15 11:35 PM
 */
class SourceDataFactoryRegistry
{
    /**
     * @var array|SourceDataFactoryInterface[]
     */
    private $factories;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->factories = [];
    }

    public function add(SourceDataFactoryInterface $factory, $alias)
    {
        $this->factories[$alias] = $factory;
    }

    /**
     * Get mapper data factory.
     *
     * @param string $name
     *
     * @return SourceDataFactoryInterface
     *
     * @throws SourceDataException
     */
    public function getFactory($name)
    {
        if (isset($this->factories[$name])) {
            return $this->factories[$name];
        }

        throw new SourceDataException(sprintf('Mapper source data factory %s not found!', $name));
    }
}
