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
use Tadcka\Mapper\MapperSource;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:16 AM
 */
class MapperSourceTest extends TestCase
{
    use MapperTestTrait;

    public function testCreate_MapperSourceExceptionRaise()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\MapperSourceException',
            'Mapper source type tadcka_mapper don\'t support this data!'
        );

        new MapperSource(
            $this->getMapperTypeMock('tadcka_mapper', 'Tadcka\\Mapper\\MapperItemInterface'),
            $this->getMapperDataMock()
        );
    }

    public function testCreate_Success()
    {
        $data = $this->getMapperDataMock();
        $source = new MapperSource(
            $this->getMapperTypeMock('tadcka_mapper'),
            $data
        );

        $this->assertEquals($data, $source->getData());
        $this->assertEquals('tadcka_mapper', $source->getTypeName());
    }
}
