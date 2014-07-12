<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Model\Manager;

use Tadcka\Component\Mapper\Model\SourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.33
 */
interface SourceManagerInterface
{
    /**
     * Find source by slug.
     *
     * @param string $slug
     *
     * @return null|SourceInterface
     */
    public function findBySlug($slug);

    /**
     * Find many source by slugs.
     *
     * @param array $slugs
     *
     * @return array|SourceInterface[]
     */
    public function findManyBySlugs(array $slugs);

    /**
     * Create source object.
     *
     * @return SourceInterface
     */
    public function create();

    /**
     * Add source object.
     *
     * @param SourceInterface $source
     * @param bool $save
     */
    public function add(SourceInterface $source, $save = false);

    /**
     * Remove source object.
     *
     * @param SourceInterface $source
     * @param bool $save
     */
    public function remove(SourceInterface $source, $save = false);

    /**
     * Save source objects.
     */
    public function save();

    /**
     * Clear source objects.
     */
    public function clear();

    /**
     * Get source class name.
     *
     * @return string
     */
    public function getClass();
}
