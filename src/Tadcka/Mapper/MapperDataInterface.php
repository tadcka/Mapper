<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/26/15 10:49 PM
 */
interface MapperDataInterface
{
    /**
     * Get item.
     *
     * @param string $id
     *
     * @return null|MapperItemInterface
     */
    public function getItem($id);
}
