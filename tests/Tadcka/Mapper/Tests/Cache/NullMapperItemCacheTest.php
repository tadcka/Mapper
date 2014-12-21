<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Cache;

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\Cache\NullMapperItemCache;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:31 PM
 */
class NullMapperItemCacheTest extends TestCase
{
    /**
     * @var NullMapperItemCache
     */
    private $cache;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->cache = new NullMapperItemCache();
    }

    public function testFetch()
    {
        $this->assertEmpty($this->cache->fetch('test_mapper'));
        $this->assertEmpty($this->cache->fetch('test_fake'));
    }
}
