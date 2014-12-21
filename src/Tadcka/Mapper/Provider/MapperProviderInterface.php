<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Provider;

use Tadcka\Mapper\MapperInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:54 PM
 */
interface MapperProviderInterface
{
    /**
     * Get mapper.
     *
     * @param string $name
     *
     * @return MapperInterface
     */
    public function getMapper($name);
}
