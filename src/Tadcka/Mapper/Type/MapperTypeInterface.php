<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Type;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 12:09 AM
 */
interface MapperTypeInterface
{
    /**
     * Get data class.
     *
     * @return string
     */
    public function getDataClass();

    /**
     * Get mapper source type name.
     *
     * @return string
     */
    public function getName();
}
