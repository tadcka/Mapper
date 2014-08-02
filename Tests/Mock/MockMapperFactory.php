<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Mock;

use Tadcka\Component\Mapper\MapperFactoryInterface;
use Tadcka\Component\Mapper\MapperInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since  7/13/14 1:02 AM
 */
class MockMapperFactory implements MapperFactoryInterface
{
    /**
     * @var MapperInterface
     */
    private $mapper;

    /**
     * Constructor.
     *
     * @param null|MapperInterface $mapper
     */
    public function __construct(MapperInterface $mapper = null)
    {
        if (null === $mapper) {
            $mapper = new MockMapper();
        }

        $this->mapper = $mapper;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        return $this->mapper;
    }

    /**
     * @param MapperInterface $mapper
     */
    public function setMapper(MapperInterface $mapper)
    {
        $this->mapper = $mapper;
    }
}
