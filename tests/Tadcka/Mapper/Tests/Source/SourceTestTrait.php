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
use Tadcka\Mapper\Source\Data\SourceDataFactoryInterface;
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
     * Get mapper source data factory mock.
     *
     * @param null|MockObject|SourceDataInterface $dataMock
     *
     * @return MockObject|SourceDataFactoryInterface
     */
    private function getSourceDataFactoryMock(SourceDataInterface $dataMock = null)
    {
        $dataFactoryMock = $this->getMock('Tadcka\\Mapper\\Source\\Data\\SourceDataFactoryInterface');

        if (null !== $dataMock) {
            $dataFactoryMock->expects($this->any())
                ->method('create')
                ->willReturn($dataMock)
            ;
        }

        return $dataFactoryMock;
    }

    /**
     * Get mapper source data mock.
     *
     * @param string $dataClass
     *
     * @return MockObject|SourceDataInterface
     */
    private function getSourceDataMock($dataClass = 'Tadcka\\Mapper\\Source\\Data\\SourceDataInterface')
    {
        return $this->getMock($dataClass);
    }

    /**
     * Get mapper source type mock.
     *
     * @param string $name
     * @param string $dataClass
     *
     * @return MockObject|SourceTypeInterface
     */
    private function getSourceTypeMock($name, $dataClass = 'Tadcka\\Mapper\\Source\\Data\\SourceDataInterface')
    {
        $typeMock = $this->getMock('Tadcka\\Mapper\\Source\\Type\\SourceTypeInterface');

        $typeMock->expects($this->any())
            ->method('getName')
            ->willReturn($name)
        ;

        $typeMock->expects($this->any())
            ->method('getDataClass')
            ->willReturn($dataClass)
        ;

        return $typeMock;
    }
}
