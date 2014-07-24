<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Cache;

use Tadcka\Component\Mapper\Tests\Mock\MockCacheFileSystem;
use Tadcka\Component\Mapper\Cache\CacheManager;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/24/14 12:19 AM
 */
class CacheManagerTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        MockCacheFileSystem::deleteTempDirectory(MockCacheFileSystem::getTempDirDirectory());
    }

    private function getFilename($locale = 'en')
    {
        $cacheManager = new CacheManager();
        return $cacheManager->getFilename(
            MockCacheFileSystem::getTempDirDirectory() . 'cache_manager/',
            'test',
            $locale
        );
    }

    public function testSave()
    {
        $cacheManager = new CacheManager();
        $cacheManager->save($this->getFilename(), 'test');

        $this->assertEquals('test', file_get_contents($this->getFilename()));

        $cacheManager->remove($this->getFilename());
    }

    public function testRemove()
    {
        $cacheManager = new CacheManager();
        $cacheManager->save($this->getFilename(), 'test');
        $cacheManager->remove($this->getFilename());

        $this->assertFalse($cacheManager->has($this->getFilename()));
    }

    public function testFetch()
    {
        $cacheManager = new CacheManager();
        $cacheManager->save($this->getFilename(), 'test');

        $this->assertEquals('test', $cacheManager->fetch($this->getFilename()));

        $cacheManager->remove($this->getFilename());
    }

    public function testHas()
    {
        $cacheManager = new CacheManager();
        $cacheManager->save($this->getFilename(), 'test');

        $this->assertTrue($cacheManager->has($this->getFilename()));

        $cacheManager->remove($this->getFilename());

        $this->assertFalse($cacheManager->has($this->getFilename()));
    }

    public function testGetFilename()
    {
        $cacheManager = new CacheManager();

        $this->assertEquals('test_directory/test_en.json', $cacheManager->getFilename('test_directory/', 'test', 'en'));
    }

    public function testGetLocalesCache()
    {
        $cacheManager = new CacheManager();

        $locales = $cacheManager
            ->getLocalesCache(MockCacheFileSystem::getTempDirDirectory() . 'cache_manager/', 'test');

        $this->assertCount(0, $locales);

        $cacheManager->save($this->getFilename(), 'test');
        $cacheManager->save($this->getFilename('lt'), 'test');
        $cacheManager->save($this->getFilename('fr'), 'test');

        $locales = $cacheManager
            ->getLocalesCache(MockCacheFileSystem::getTempDirDirectory() . 'cache_manager/', 'test');

        $this->assertCount(3, $locales);
        $this->assertEquals('en', $locales[0]);
        $this->assertEquals('fr', $locales[1]);
        $this->assertEquals('lt', $locales[2]);

        $locales = $cacheManager
            ->getLocalesCache(MockCacheFileSystem::getTempDirDirectory() . 'cache_manager/', 'fake');

        $this->assertCount(0, $locales);
    }

    protected function tearDown()
    {
        MockCacheFileSystem::deleteTempDirectory(MockCacheFileSystem::getTempDirDirectory());
    }
}
