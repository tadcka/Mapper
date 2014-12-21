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

use Tadcka\Mapper\Model\MapperSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.33
 */
interface MapperSourceManagerInterface
{
    /**
     * Find mapper source by slug.
     *
     * @param string $slug
     *
     * @return null|MapperSourceInterface
     */
    public function findBySlug($slug);

    /**
     * Find mapper sources by slugs.
     *
     * @param array $slugs
     *
     * @return array|MapperSourceInterface[]
     */
    public function findBySlugs(array $slugs);

    /**
     * Create mapper source object.
     *
     * @return MapperSourceInterface
     */
    public function create();

    /**
     * Add mapper source object.
     *
     * @param MapperSourceInterface $source
     * @param bool $save
     */
    public function add(MapperSourceInterface $source, $save = false);

    /**
     * Remove mapper source object.
     *
     * @param MapperSourceInterface $source
     * @param bool $save
     */
    public function remove(MapperSourceInterface $source, $save = false);

    /**
     * Save mapper source objects.
     */
    public function save();

    /**
     * Clear mapper source objects.
     */
    public function clear();

    /**
     * Get mapper source class name.
     *
     * @return string
     */
    public function getClass();
}
