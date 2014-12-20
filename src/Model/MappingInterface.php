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
 * @since 14.7.12 14.28
 */
interface MappingInterface
{
    /**
     * Set main.
     *
     * @param bool $main
     *
     * @return MappingInterface
     */
    public function setMain($main);

    /**
     * Is main.
     *
     * @return bool
     */
    public function isMain();

    /**
     * Set left category.
     *
     * @param CategoryInterface $left
     *
     * @return MappingInterface
     */
    public function setLeft(CategoryInterface $left);

    /**
     * Get left category.
     *
     * @return CategoryInterface
     */
    public function getLeft();

    /**
     * Set right category.
     *
     * @param CategoryInterface $right
     *
     * @return MappingInterface
     */
    public function setRight(CategoryInterface$right);

    /**
     * Get right category.
     *
     * @return CategoryInterface
     */
    public function getRight();
}
