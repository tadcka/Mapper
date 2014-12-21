<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Cache;

use Tadcka\Mapper\MapperItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 10:28 PM
 */
interface MapperItemCacheInterface
{
    /**
     * Fetch mapper item from cache.
     *
     * @param string $key
     *
     * @return null|MapperItemInterface
     */
    public function fetch($key);

    /**
     * Save mapper item to cache.
     *
     * @param string $key
     * @param MapperItemInterface $mapperItem
     */
    public function save($key, MapperItemInterface $mapperItem);
}
