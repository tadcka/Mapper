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
interface MapperSourceInterface
{
    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return MapperSourceInterface
     */
    public function setSlug($slug);

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set mapper items.
     *
     * @param array|MapperItemInterface[] $items
     *
     * @return MapperSourceInterface
     */
    public function setItems($items);

    /**
     * Get mapper items.
     *
     * @return array|MapperItemInterface[]
     */
    public function getItems();

    /**
     * Add mapper item.
     *
     * @param MapperItemInterface $item
     */
    public function addItem(MapperItemInterface $item);

    /**
     * Remove mapper item.
     *
     * @param MapperItemInterface $item
     */
    public function removeItem(MapperItemInterface $item);

    /**
     * Get createAt.
     *
     * @return \Datetime
     */
    public function getCreatedAt();
}
