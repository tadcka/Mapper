<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Source;

use PHPUnit_Framework_MockObject_MockObject as MockObject;
use Tadcka\Mapper\Source\Data\SourceDataInterface;
use Tadcka\Mapper\Source\Type\SourceTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:21 AM
 */
trait SourceTestTrait
{
    /**
     * Get mapper type mock.
     *
     * @param string $name
     * @param string $dataClass
     *
     * @return MockObject|SourceTypeInterface
     */
    private function getMapperTypeMock($name, $dataClass = 'Tadcka\\Mapper\\Source\\Data\\SourceDataInterface')
    {
        $mockType = $this->getMock('Tadcka\\Mapper\\Source\\Type\\SourceTypeInterface');

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
     * @return MockObject|SourceDataInterface
     */
    private function getMapperDataMock($dataClass = 'Tadcka\\Mapper\\Source\\Data\\SourceDataInterface')
    {
        return $this->getMock($dataClass);
    }
}
