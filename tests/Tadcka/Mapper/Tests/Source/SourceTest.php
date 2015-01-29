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

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\MapperSource;
use Tadcka\Mapper\Source\Source;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:16 AM
 */
class SourceTest extends TestCase
{
    use SourceTestTrait;

    public function testCreate_SourceExceptionRaise()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\SourceException',
            'Mapper source type tadcka_mapper don\'t support this data!'
        );

        new Source(
            $this->getMapperTypeMock('tadcka_mapper', 'Tadcka\\Mapper\\MapperItemInterface'),
            $this->getMapperDataMock(),
            'tadcka_mapper'
        );
    }

    public function testCreate_Success()
    {
        $data = $this->getMapperDataMock();
        $source = new Source(
            $this->getMapperTypeMock('tadcka_mapper'),
            $data,
            'tadcka_mapper'
        );

        $this->assertEquals($data, $source->getData());
        $this->assertEquals('tadcka_mapper', $source->getTypeName());
    }
}
