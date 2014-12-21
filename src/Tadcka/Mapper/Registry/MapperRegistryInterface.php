<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:26 PM
 */
interface MapperRegistryInterface
{
    /**
     * Add mapper config.
     *
     * @param MapperConfig $config
     */
    public function add(MapperConfig $config);
}
