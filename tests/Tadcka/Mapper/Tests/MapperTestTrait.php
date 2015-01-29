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

use PHPUnit_Framework_MockObject_MockObject as MockObject;
use Tadcka\Mapper\Data\MapperDataInterface;
use Tadcka\Mapper\Type\MapperTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:21 AM
 */
trait MapperTestTrait
{
    /**
     * Get mapper type mock.
     *
     * @param string $name
     * @param string $dataClass
     *
     * @return MockObject|MapperTypeInterface
     */
    private function getMapperTypeMock($name, $dataClass = 'Tadcka\\Mapper\\Data\\MapperDataInterface')
    {
        $mockType = $this->getMock('Tadcka\\Mapper\\Type\\MapperTypeInterface');

        $mockType->expects($this->any())
            ->method('getName')
            ->willReturn($name)
        ;

        $mockType->expects($this->any())
            ->method('getDataClass')
            ->willReturn($dataClass)
        ;

        return $mockType;
    }

    /**
     * Get mapper data mock.
     *
     * @param string $dataClass
     *
     * @return MockObject|MapperDataInterface
     */
    private function getMapperDataMock($dataClass = 'Tadcka\\Mapper\\Data\\MapperDataInterface')
    {
        return $this->getMock($dataClass);
    }
}
