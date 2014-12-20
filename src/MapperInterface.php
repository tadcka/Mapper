<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:33 PM
 */
interface MapperInterface
{
    /**
     * Get mapper.
     *
     * @param string $name
     * @param string $locale
     *
     * @return MapperItemInterface
     */
    public function getMapper($name, $locale);
}
