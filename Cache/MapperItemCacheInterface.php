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
     */
    public function save(SourceInterface $source, MapperItemInterface $mapperItem);

    /**
     * Fetches mapper item from the cache.
     *
     * @param SourceInterface $source
     *
     * @return MapperItemInterface $mapperItem
     */
    public function fetch(SourceInterface $source);
}
