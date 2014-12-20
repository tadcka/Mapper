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
interface CategoryInterface
{
    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return SourceInterface
     */
    public function setSlug($slug);

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set source.
     *
     * @param SourceInterface $source
     *
     * @return SourceInterface
     */
    public function setSource(SourceInterface $source);

    /**
     * Get source.
     *
     * @return SourceInterface
     */
    public function getSource();
}
