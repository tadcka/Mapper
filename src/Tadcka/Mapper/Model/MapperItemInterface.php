<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Model;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.16
 */
interface MapperItemInterface
{
    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return MapperItemInterface
     */
    public function setSlug($slug);

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set mapper source.
     *
     * @param MapperSourceInterface $source
     *
     * @return MapperItemInterface
     */
    public function setSource(MapperSourceInterface $source);

    /**
     * Get mapper source.
     *
     * @return MapperSourceInterface
     */
    public function getSource();
}
