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

use Tadcka\Mapper\Model\MappingItemInterface;
use Tadcka\Mapper\Model\MappingSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.34
 */
interface MappingItemManagerInterface
{
    /**
     * Find mapping item by slug and source.
     *
     * @param string $slug
     * @param MappingSourceInterface $source
     *
     * @return null|MappingItemInterface
     */
    public function findBySlugAndSource($slug, MappingSourceInterface $source);

    /**
     * Find mapping items by slugs and source.
     *
     * @param array $slugs
     * @param MappingSourceInterface $source
     *
     * @return array|MappingItemInterface[]
     */
    public function findBySlugsAndSource(array $slugs, MappingSourceInterface $source);

    /**
     * Find mapping items by source.
     *
     * @param MappingSourceInterface $source
     *
     * @return array|MappingItemInterface[]
     */
    public function findBySource(MappingSourceInterface $source);

    /**
     * Create mapping item object.
     *
     * @return MappingItemInterface
     */
    public function create();

    /**
     * Add mapping item object.
     *
     * @param MappingItemInterface $mappingItem
     * @param bool $save
     */
    public function add(MappingItemInterface $mappingItem, $save = false);

    /**
     * Remove mapping item object.
     *
     * @param MappingItemInterface $mappingItem
     * @param bool $save
     */
    public function remove(MappingItemInterface $mappingItem, $save = false);

    /**
     * Save mapping item objects.
     */
    public function save();

    /**
     * Clear mapping item objects.
     */
    public function clear();

    /**
     * Get mapping item class name.
     *
     * @return string
     */
    public function getClass();
}
