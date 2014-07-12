<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Registry;

use Tadcka\Component\Mapper\Config\Config;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:26 PM
 */
interface RegistryInterface
{
    /**
     * Add mapper config.
     *
     * @param Config $config
     */
    public function add(Config $config);
}
