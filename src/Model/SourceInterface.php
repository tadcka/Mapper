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
 * @since 14.7.12 14.15
 */
interface SourceInterface
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
     * Set categories.
     *
     * @param array|CategoryInterface[] $categories
     *
     * @return SourceInterface
     */
    public function setCategories($categories);

    /**
     * Get categories.
     *
     * @return array|CategoryInterface[]
     */
    public function getCategories();

    /**
     * Add category.
     *
     * @param CategoryInterface $category
     */
    public function addCategory(CategoryInterface $category);

    /**
     * Remove category.
     *
     * @param CategoryInterface $category
     */
    public function removeCategory(CategoryInterface $category);

    /**
     * Get createAt.
     *
     * @return \Datetime
     */
    public function getCreatedAt();
}
