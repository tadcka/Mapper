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
use Tadcka\Mapper\Source\Source;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:16 AM
 */
class SourceTest extends TestCase
{
    use SourceTestTrait;

    public function testGetData_SourceExceptionRaise()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\SourceException',
            'Mapper source type tadcka_mapper don\'t support this data!'
        );

        $source = new Source(
            $this->getSourceTypeMock('tadcka_mapper', 'Tadcka\\Mapper\\MapperItemInterface'),
            $this->getSourceDataFactoryMock(),
            'tadcka_mapper'
        );

        $source->getData();
    }

    public function testGetData_Success()
    {
        $data = $this->getSourceDataMock();
        $source = new Source(
            $this->getSourceTypeMock('tadcka_mapper'),
            $this->getSourceDataFactoryMock($data),
            'tadcka_mapper'
        );

        $this->assertEquals($data, $source->getData());
    }
}
