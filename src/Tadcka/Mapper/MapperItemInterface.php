<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:41 PM
 */
interface MapperItemInterface
{
    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get name.
     *
     * @return string
     */
    public function getName();

    /**
     * Set children.
     *
     * @param array|MapperItemInterface[] $children
     *
     * @return MapperItemInterface
     */
    public function setChildren(array $children);

    /**
     * Get children.
     *
     * @return array|MapperItemInterface[]
     */
    public function getChildren();

    /**
     * Add child.
     *
     * @param MapperItemInterface $child
     */
    public function addChild(MapperItemInterface $child);

    /**
     * Can use for mapping.
     *
     * @return bool
     */
    public function canUseForMapping();

    /**
     * Get priority.
     *
     * @return int
     */
    public function getPriority();
}
