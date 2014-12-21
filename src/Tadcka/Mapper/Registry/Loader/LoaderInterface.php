<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Registry\Loader;

use Tadcka\Mapper\Registry\RegistryInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:39 PM
 */
interface LoaderInterface
{
    /**
     * Load mapper config and register it.
     *
     * @param RegistryInterface $registry
     */
    public function register(RegistryInterface $registry);
}
