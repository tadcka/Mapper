<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:16 PM
 */
interface MapperRegistryLoaderInterface
{
    /**
     * Load mapper config and register it.
     *
     * @param MapperRegistryInterface $registry
     */
    public function register(MapperRegistryInterface $registry);
}
