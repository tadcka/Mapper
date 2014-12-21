<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Model\Manager;

use Tadcka\Mapper\Model\MappingSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.33
 */
interface MappingSourceManagerInterface
{
    /**
     * Find mapping source by slug.
     *
     * @param string $slug
     *
     * @return null|MappingSourceInterface
     */
    public function findBySlug($slug);

    /**
     * Find mapping sources by slugs.
     *
     * @param array $slugs
     *
     * @return array|MappingSourceInterface[]
     */
    public function findBySlugs(array $slugs);

    /**
     * Create mapping source object.
     *
     * @return MappingSourceInterface
     */
    public function create();

    /**
     * Add mapping source object.
     *
     * @param MappingSourceInterface $source
     * @param bool $save
     */
    public function add(MappingSourceInterface $source, $save = false);

    /**
     * Remove mapping source object.
     *
     * @param MappingSourceInterface $source
     * @param bool $save
     */
    public function remove(MappingSourceInterface $source, $save = false);

    /**
     * Save mapping source objects.
     */
    public function save();

    /**
     * Clear mapping source objects.
     */
    public function clear();

    /**
     * Get mapping source class name.
     *
     * @return string
     */
    public function getClass();
}
