<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Registry;

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\Registry\MapperConfig;
use Tadcka\Mapper\Registry\MapperRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:19 PM
 */
class MapperRegistryTest extends TestCase
{
    /**
     * @var MapperRegistry
     */
    private $registry;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->registry = new MapperRegistry();
    }

    public function testAdd()
    {
        $this->registry->add($this->createConfigMock('test_mapper'));
        $this->registry->add($this->createConfigMock('test_mock'));

        $configs = $this->registry->getConfigs();

        $this->assertCount(2, $configs);
        $this->assertNotEmpty($configs['test_mapper']);
        $this->assertNotEmpty($configs['test_mock']);
    }

    /**
     * Create mapper config mock.
     *
     * @param string $name
     *
     * @return MapperConfig
     */
    private function createConfigMock($name)
    {
        $mock = $this->getMockBuilder('Tadcka\\Mapper\\Registry\\MapperConfig')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $mock->expects($this->any())
            ->method('getName')
            ->willReturn($name)
        ;

        return $mock;
    }
}
