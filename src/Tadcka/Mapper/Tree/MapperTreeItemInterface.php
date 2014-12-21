<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tree;

use Tadcka\Mapper\MapperItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:41 PM
 */
interface MapperTreeItemInterface extends MapperItemInterface
{
    /**
     * Set active for mapping.
     *
     * @param bool $active
     *
     * @return MapperTreeItemInterface
     */
    public function setActive($active);

    /**
     * Check if is active for mapping.
     *
     * @return bool
     */
    public function isActive();

    /**
     * Set children.
     *
     * @param array|MapperTreeItemInterface[] $children
     *
     * @return MapperTreeItemInterface
     */
    public function setChildren(array $children);

    /**
     * Get children.
     *
     * @return array|MapperTreeItemInterface[]
     */
    public function getChildren();

    /**
     * Add child.
     *
     * @param MapperTreeItemInterface $child
     */
    public function addChild(MapperTreeItemInterface $child);

    /**
     * Set priority.
     *
     * @param int $priority
     *
     * @return MapperTreeItemInterface
     */
    public function setPriority($priority);

    /**
     * Get priority.
     *
     * @return int
     */
    public function getPriority();
}
