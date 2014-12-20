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

use Tadcka\Mapper\Model\CategoryInterface;
use Tadcka\Mapper\Model\MappingInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.33
 */
interface MappingManagerInterface
{
    /**
     * Find main mapping.
     *
     * @param string $categorySlug
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return null|MappingInterface
     */
    public function findMainMapping($categorySlug, $sourceSlug, $otherSourceSlug);

    /**
     * Find many mappings.
     *
     * @param string $categorySlug
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return array|MappingInterface[]
     */
    public function findManyMappingsByCategorySlug($categorySlug, $sourceSlug, $otherSourceSlug);

    /**
     * Find many mappings by category slugs.
     *
     * @param array $categorySlugs
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return array|MappingInterface[]
     */
    public function findManyMappingsByCategorySlugs(array $categorySlugs, $sourceSlug, $otherSourceSlug);

    /**
     * Create mapping object.
     *
     * @return MappingInterface
     */
    public function create();

    /**
     * Add mapping object.
     *
     * @param MappingInterface $mapping
     * @param bool $save
     */
    public function add(MappingInterface $mapping, $save = false);

    /**
     * Remove mapping object.
     *
     * @param MappingInterface $mapping
     * @param bool $save
     */
    public function remove(MappingInterface $mapping, $save = false);

    /**
     * Save mapping objects.
     */
    public function save();

    /**
     * Clear mapping objects.
     */
    public function clear();

    /**
     * Get mapping class name.
     *
     * @return string
     */
    public function getClass();
}
