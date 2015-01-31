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
use Tadcka\Mapper\Tests\Source\SourceTestTrait;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/31/15 1:03 PM
 */
class SourceDataFactoryRegistryTest extends TestCase
{
    use SourceTestTrait;

    CONST FACTORY_ALIAS = 'source_data_factory';

    /**
     * @var SourceDataFactoryRegistry
     */
    private $registry;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->registry = new SourceDataFactoryRegistry();
    }

    public function testGetFactory_SourceDataExceptionRaise()
    {
        $this->setExpectedException(
            'Tadcka\\Mapper\\Exception\\SourceDataException',
            sprintf('Mapper source data factory %s not found!', self::FACTORY_ALIAS)
        );

        $this->registry->getFactory(self::FACTORY_ALIAS);
    }

    public function testGetFactory_Success()
    {
        $factoryMock = $this->getSourceDataFactoryMock();

        $this->registry->add($factoryMock, self::FACTORY_ALIAS);

        $this->assertEquals($factoryMock, $this->registry->getFactory(self::FACTORY_ALIAS));
    }
}
