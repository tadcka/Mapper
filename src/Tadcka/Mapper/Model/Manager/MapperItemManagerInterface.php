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

use Tadcka\Mapper\Model\MapperItemInterface;
use Tadcka\Mapper\Model\MapperSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.34
 */
interface MapperItemManagerInterface
{
    /**
     * Find mapper item by slug and source.
     *
     * @param string $slug
     * @param MapperSourceInterface $source
     *
     * @return null|MapperItemInterface
     */
    public function findBySlugAndSource($slug, MapperSourceInterface $source);

    /**
     * Find mapper items by slugs and source.
     *
     * @param array $slugs
     * @param MapperSourceInterface $source
     *
     * @return array|MapperItemInterface[]
     */
    public function findBySlugsAndSource(array $slugs, MapperSourceInterface $source);

    /**
     * Find mapper items by source.
     *
     * @param MapperSourceInterface $source
     *
     * @return array|MapperItemInterface[]
     */
    public function findBySource(MapperSourceInterface $source);

    /**
     * Create mapper item object.
     *
     * @return MapperItemInterface
     */
    public function create();

    /**
     * Add mapper item object.
     *
     * @param MapperItemInterface $mapperItem
     * @param bool $save
     */
    public function add(MapperItemInterface $mapperItem, $save = false);

    /**
     * Remove mapper item object.
     *
     * @param MapperItemInterface $mapperItem
     * @param bool $save
     */
    public function remove(MapperItemInterface $mapperItem, $save = false);

    /**
     * Save mapper item objects.
     */
    public function save();

    /**
     * Clear mapper item objects.
     */
    public function clear();

    /**
     * Get mapper item class name.
     *
     * @return string
     */
    public function getClass();
}
