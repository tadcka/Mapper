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

use Tadcka\Mapper\MapperDataInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 9:57 PM
 */
interface MapperDataCacheInterface
{
    const SUB_DIR = 'data';

    /**
     * Fetch mapper item from cache.
     *
     * @param string $key
     *
     * @return null|MapperDataInterface
     */
    public function fetch($key);

    /**
     * Save mapper data to cache.
     *
     * @param string $key
     * @param MapperDataInterface $mapperData
     * @param \DateTime $ttl
     */
    public function save($key, MapperDataInterface $mapperData, \DateTime $ttl);
}
