<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Registry;

use Tadcka\Mapper\Registry\Config\Config;
use Tadcka\Mapper\Registry\Registry;
use Tadcka\Mapper\Tests\Mock\Registry\Loader\MockLoader;
use Tadcka\Mapper\Tests\Mock\MockMapperFactory;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 12:00 AM
 */
class RegistryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return Registry
     */
    private function createRegistry()
    {
        return new Registry();
    }

    public function testEmpty()
    {
        $registry = $this->createRegistry();

        $this->assertCount(0, $registry->getContainer()->all());
    }

    public function testNotEmpty()
    {
        $registry = $this->createRegistry();

        $config1 = new Config('test1', new MockMapperFactory());
        $registry->add($config1);
        $registry->add($config1);
        $this->assertCount(1, $registry->getContainer()->all());

        $this->assertEquals($config1, $registry->getContainer()->get('test1'));
        $this->assertEmpty($registry->getContainer()->get('empty'));

        $registry->add(new Config('test2', new MockMapperFactory()));
        $this->assertCount(2, $registry->getContainer()->all());
        $this->assertNotEmpty($registry->getContainer()->get('test2'));
    }

    public function testLoader()
    {
        $registry = $this->createRegistry();

        $loader = new MockLoader();
        $registry->register($loader);
        $this->assertCount(1, $registry->getContainer()->all());
        $this->assertNotEmpty($registry->getContainer()->get('test_loader'));

        $registry->register($loader);
        $this->assertCount(1, $registry->getContainer()->all());
        $this->assertNotEmpty($registry->getContainer()->get('test_loader'));
    }
}
