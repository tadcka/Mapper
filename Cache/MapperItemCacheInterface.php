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

use Tadcka\Component\Mapper\MapperItemInterface;
use Tadcka\Component\Mapper\Model\SourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/15/14 8:14 PM
 */
interface MapperItemCacheInterface
{
    /**
     * Saves mapper item in the cache.
     *
     * @param SourceInterface $source
     * @param MapperItemInterface $mapperItem
     * @param string $locale
     *
     * @return
     */
    public function save(SourceInterface $source, MapperItemInterface $mapperItem, $locale);

    /**
     * Fetches mapper item from the cache.
     *
     * @param SourceInterface $source
     * @param string $locale
     *
     * @return null|MapperItemInterface $mapperItem
     */
    public function fetch(SourceInterface $source, $locale);

    /**
     * Check if has mapper item cache.
     *
     * @param SourceInterface $source
     * @param string $locale
     *
     * @return bool
     */
    public function has(SourceInterface $source, $locale);

    /**
     * Remove mapper item cache by locale.
     *
     * @param SourceInterface $source
     * @param string $locale
     */
    public function remove(SourceInterface $source, $locale);

    /**
     * Remove mapper item cache.
     *
     * @param SourceInterface $source
     */
    public function removeAll(SourceInterface $source);
}
