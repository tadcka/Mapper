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
 * @since 12/22/14 12:40 AM
 */
interface MapperSourceInterface
{
    /**
     * Get mapper item by id.
     *
     * @param string $id
     *
     * @return null|MapperItemInterface
     */
    public function getItem($id);

    /**
     * Get mapper source name.
     *
     * @return string
     */
    public function getName();
}
