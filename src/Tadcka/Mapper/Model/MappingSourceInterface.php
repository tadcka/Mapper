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
interface MappingSourceInterface
{
    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return MappingSourceInterface
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
     * @param array|MappingItemInterface[] $items
     *
     * @return MappingSourceInterface
     */
    public function setItems($items);

    /**
     * Get mapper items.
     *
     * @return array|MappingItemInterface[]
     */
    public function getItems();

    /**
     * Add mapper item.
     *
     * @param MappingItemInterface $item
     */
    public function addItem(MappingItemInterface $item);

    /**
     * Remove mapper item.
     *
     * @param MappingItemInterface $item
     */
    public function removeItem(MappingItemInterface $item);

    /**
     * Get createAt.
     *
     * @return \Datetime
     */
    public function getCreatedAt();
}
