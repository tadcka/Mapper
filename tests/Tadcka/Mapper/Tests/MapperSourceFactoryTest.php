<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests;

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\MapperSourceFactory;
use Tadcka\Mapper\Registry\Type\MapperSourceTypeRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:06 AM
 */
class MapperSourceFactoryTest extends TestCase
{
    use MapperTestTrait;

    /**
     * @var MapperSourceFactory
     */
    private $factory;

    /**
     * @var MapperSourceTypeRegistry
     */
    private $registry;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->registry = new MapperSourceTypeRegistry();
        $this->factory = new MapperSourceFactory($this->registry);
    }

    public function testCreate_WithStringTypeArgument()
    {
        $this->registry->add($this->getMapperTypeMock('tadcka_mapper'), 'tadcka_mapper');

        $source = $this->factory->create('tadcka_mapper', $this->getMapperDataMock(), 'tadcka_mapper');

        $this->assertEquals('tadcka_mapper', $source->getTypeName());
    }
}
