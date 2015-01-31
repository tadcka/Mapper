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
use Tadcka\Mapper\Source\Data\SourceDataFactoryRegistry;
use Tadcka\Mapper\Source\SourceMetadata;
use Tadcka\Mapper\Source\SourceProvider;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/31/15 12:47 PM
 */
class SourceProviderTest extends TestCase
{
    use SourceTestTrait;

    /**
     * @var SourceDataFactoryRegistry
     */
    private $dataFactoryRegistry;

    /**
     * @var SourceProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->dataFactoryRegistry = new SourceDataFactoryRegistry();
        $this->provider = new SourceProvider($this->dataFactoryRegistry);
    }

    public function testGetData_SourceDataExceptionRaise()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\SourceDataException',
            'Mapper source data factory tadcka_mapper not found!'
        );

        $this->provider->getData($this->createMetadata('tadcka_mapper'));
    }

    public function testGetData_Success()
    {
        $dataMock = $this->getSourceDataMock();

        $this->dataFactoryRegistry->add($this->getSourceDataFactoryMock($dataMock), 'tadcka_mapper');

        $this->assertEquals($dataMock, $this->provider->getData($this->createMetadata('tadcka_mapper')));
    }

    private function createMetadata($name, array $options = [])
    {
        return new SourceMetadata($name, $options);
    }
}
