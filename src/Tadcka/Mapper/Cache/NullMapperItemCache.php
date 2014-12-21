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
 * @since 12/21/14 11:22 PM
 */
class NullMapperItemCache implements MapperItemCacheInterface
{

    /**
     * {@inheritdoc}
     */
    public function fetch($key)
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function save($key, MapperItemInterface $mapperItem)
    {
        // do nothing
    }
}
