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

use Tadcka\Mapper\Source\Data\SourceDataInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 9:57 PM
 */
interface SourceDataCacheInterface
{
    const SUB_DIR = 'data';

    /**
     * Delete mapper source data from cache.
     *
     * @param string $key
     *
     * @return bool
     */
    public function delete($key);

    /**
     * Fetch mapper source data from cache.
     *
     * @param string $key
     *
     * @return null|SourceDataInterface
     */
    public function fetch($key);

    /**
     * Save mapper source data to cache.
     *
     * @param string $key
     * @param SourceDataInterface $data
     * @param \DateTime $ttl
     */
    public function save($key, SourceDataInterface $data, \DateTime $ttl);
}
