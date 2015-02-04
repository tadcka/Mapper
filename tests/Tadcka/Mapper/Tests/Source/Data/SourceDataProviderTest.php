<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Source\Data;

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\Source\Data\SourceDataFactoryRegistry;
use Tadcka\Mapper\Source\Data\SourceDataProvider;
use Tadcka\Mapper\Tests\Source\SourceTestTrait;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 2/5/15 12:01 AM
 */
class SourceDataProviderTest extends TestCase
{
    use SourceTestTrait;

    CONST FACTORY_NAME = 'source_data_factory';

    /**
     * @var SourceDataFactoryRegistry
     */
    private $dataFactoryRegistry;

    /**
     * @var SourceDataProvider
     */
    private $provider;

    protected function setUp()
    {
        $this->dataFactoryRegistry = new SourceDataFactoryRegistry();
        $this->provider = new SourceDataProvider($this->dataFactoryRegistry);
    }

    public function testGetData_SourceDataExceptionRaised()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\SourceDataException',
            sprintf('Mapper source data factory %s not found!', self::FACTORY_NAME)
        );

        $this->provider->getData(self::FACTORY_NAME);
    }

    public function testGetData_Success()
    {
        $dataMock = $this->getSourceDataMock();

        $this->dataFactoryRegistry->add($this->getSourceDataFactoryMock($dataMock), self::FACTORY_NAME);

        $this->assertEquals($dataMock, $this->provider->getData(self::FACTORY_NAME));
    }
}
