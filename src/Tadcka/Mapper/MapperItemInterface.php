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
 * @since 12/21/14 10:46 PM
 */
interface MapperItemInterface
{
    /**
     * Get id.
     *
     * @return string
     */
    public function getId();

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle();
}
