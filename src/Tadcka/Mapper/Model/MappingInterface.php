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
     * Set left item.
     *
     * @param MapperItemInterface $leftItem
     *
     * @return MappingInterface
     */
    public function setLeftItem(MapperItemInterface $leftItem);

    /**
     * Get left item.
     *
     * @return MapperItemInterface
     */
    public function getLeftItem();

    /**
     * Set right item.
     *
     * @param MapperItemInterface $rightItem
     *
     * @return MappingInterface
     */
    public function setRightItem(MapperItemInterface $rightItem);

    /**
     * Get right item.
     *
     * @return MapperItemInterface
     */
    public function getRightItem();
}
