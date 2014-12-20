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
use Tadcka\Mapper\Model\SourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.34
 */
interface CategoryManagerInterface
{
    /**
     * Find category by slug and source.
     *
     * @param string $slug
     * @param SourceInterface $source
     *
     * @return null|CategoryInterface
     */
    public function findBySlugAndSource($slug, SourceInterface $source);

    /**
     * Find many categories by slugs and source.
     *
     * @param array $slugs
     * @param SourceInterface $source
     *
     * @return array|CategoryInterface[]
     */
    public function findManyBySlugsAndSource(array $slugs, SourceInterface $source);

    /**
     * Find many categories by source.
     *
     * @param SourceInterface $source
     *
     * @return array|CategoryInterface[]
     */
    public function findManyBySource(SourceInterface $source);

    /**
     * Create category object.
     *
     * @return CategoryInterface
     */
    public function create();

    /**
     * Add category object.
     *
     * @param CategoryInterface $category
     * @param bool $save
     */
    public function add(CategoryInterface $category, $save = false);

    /**
     * Remove category object.
     *
     * @param CategoryInterface $category
     * @param bool $save
     */
    public function remove(CategoryInterface $category, $save = false);

    /**
     * Save category objects.
     */
    public function save();

    /**
     * Clear category objects.
     */
    public function clear();

    /**
     * Get category class name.
     *
     * @return string
     */
    public function getClass();
}
