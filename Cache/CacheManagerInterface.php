<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Cache;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/23/14 10:02 PM
 */
interface CacheManagerInterface
{
    /**
     * Saves in the cache.
     *
     * @param string $filename
     * @param string $string
     */
    public function save($filename, $string);

    /**
     * Fetches from the cache.
     *
     * @param string $filename
     *
     * @return string
     */
    public function fetch($filename);

    /**
     * Check if has cache.
     *
     * @param string $filename
     *
     * @return bool
     */
    public function has($filename);

    /**
     * Remove cache.
     *
     * @param string $filename
     */
    public function remove($filename);

    /**
     * Remove all cache.
     *
     * @param string $cacheDir
     * @param string $name
     */
    public function removeAll($cacheDir, $name);

    /**
     * Get filename.
     *
     * @param string $cacheDir
     * @param string $name
     * @param string $locale
     *
     * @return string
     */
    public function getFilename($cacheDir, $name, $locale);

    /**
     * Get locales cache.
     *
     * @param string $cacheDir
     * @param string $name
     *
     * @return array
     */
    public function getLocalesCache($cacheDir, $name);
}
