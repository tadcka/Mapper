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

use Tadcka\Component\Mapper\Model\CategoryInterface;
use Tadcka\Component\Mapper\Model\MappingInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.33
 */
interface MappingManagerInterface
{
    /**
     * Find many mapping by category.
     *
     * @param CategoryInterface $category
     *
     * @return array|MappingInterface[]
     */
    public function findManyByCategory(CategoryInterface $category);

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
