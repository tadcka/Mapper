<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Mapping;

use Tadcka\Mapper\Model\MappingInterface;
use Tadcka\Mapper\Model\MappingItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:36 PM
 */
interface MappingProviderInterface
{
    /**
     * Get mapper mapping items.
     *
     * @param string $sourceItemId
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return array|MappingItemInterface[]
     */
    public function getItems($sourceItemId, $sourceSlug, $otherSourceSlug);

    /**
     * Get mapper mapping main item.
     *
     * @param string $sourceItemId
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return null|MappingInterface
     */
    public function getMainItem($sourceItemId, $sourceSlug, $otherSourceSlug);

    /**
     * Get mapper mappings.
     *
     * @param string $sourceItemId
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return array|MappingInterface[]
     */
    public function getMappings($sourceItemId, $sourceSlug, $otherSourceSlug);
}
