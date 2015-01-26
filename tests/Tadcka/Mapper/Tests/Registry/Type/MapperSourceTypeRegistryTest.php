<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Registry\Type;

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\Registry\Type\MapperSourceTypeRegistry;
use Tadcka\Mapper\Tests\MapperTestTrait;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/26/15 11:07 PM
 */
class MapperSourceTypeRegistryTest extends TestCase
{
    use MapperTestTrait;

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
    }

    public function testAdd_MapperSourceTypeExceptionRaised()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\MapperSourceTypeException',
            'Mapper source type tadcka_mapper alias is not valid!'
        );

        $this->registry->add($this->getMapperTypeMock('tadcka_mapper_mock'), 'tadcka_mapper');
    }

    public function testAdd_Success()
    {
        $mockType = $this->getMapperTypeMock('tadcka_mapper');

        $this->registry->add($mockType, 'tadcka_mapper');

        $types = $this->registry->getTypes();

        $this->assertCount(1, $types);
        $this->assertEquals($mockType, reset($types));
    }

    public function testGetType_MapperSourceTypeExceptionRaised()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\MapperSourceTypeException',
            'Mapper source type tadcka_mapper not found!'
        );

        $this->registry->getType('tadcka_mapper');
    }

    public function testGetType_Success()
    {
        $mockType = $this->getMapperTypeMock('tadcka_mapper');

        $this->registry->add($mockType, 'tadcka_mapper');

        $this->assertEquals($mockType, $this->registry->getType('tadcka_mapper'));
    }
}
