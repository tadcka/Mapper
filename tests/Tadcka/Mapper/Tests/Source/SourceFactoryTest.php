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
use Tadcka\Mapper\Source\SourceFactory;
use Tadcka\Mapper\Source\Type\SourceTypeRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 1:06 AM
 */
class SourceFactoryTest extends TestCase
{
    use SourceTestTrait;

    /**
     * @var SourceFactory
     */
    private $factory;

    /**
     * @var SourceTypeRegistry
     */
    private $registry;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->registry = new SourceTypeRegistry();
        $this->factory = new SourceFactory($this->registry);
    }

    public function testCreate_WithStringTypeArgument()
    {
        $this->registry->add($this->getSourceTypeMock('tadcka_mapper'), 'tadcka_mapper');

        $source = $this->factory->create('tadcka_mapper', $this->getSourceDataFactoryMock(), 'tadcka_mapper');

        $this->assertEquals('tadcka_mapper', $source->getTypeName());
    }
}
