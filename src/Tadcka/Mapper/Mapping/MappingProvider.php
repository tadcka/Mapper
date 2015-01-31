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

use Tadcka\Mapper\Model\Manager\MappingManagerInterface;
use Tadcka\Mapper\Model\MappingInterface;
use Tadcka\Mapper\Model\MappingItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:37 PM
 */
class MappingProvider implements MappingProviderInterface
{
    /**
     * @var MappingManagerInterface
     */
    private $mappingManager;

    /**
     * Constructor.
     *
     * @param MappingManagerInterface $mappingManager
     */
    public function __construct(MappingManagerInterface $mappingManager)
    {
        $this->mappingManager = $mappingManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getItems($sourceItemId, $sourceSlug, $otherSourceSlug)
    {
        $items = [];
        foreach ($this->mappingManager->findBySourceItemId($sourceItemId, $sourceSlug, $otherSourceSlug) as $mapping) {
            $items[] = $this->getItemBySource($mapping, $sourceSlug);
        }

        return $items;
    }

    /**
     * {@inheritdoc}
     */
    public function getMainItem($sourceItemId, $sourceSlug, $otherSourceSlug)
    {
        $mapping = $this->mappingManager->findMainBySourceItemId($sourceItemId, $sourceSlug, $otherSourceSlug);
        if (null === $mapping) {
            return null;
        }

        return $this->getItemBySource($mapping, $sourceSlug);
    }

    /**
     * Get item by source.
     *
     * @param MappingInterface $mapping
     * @param string $sourceSlug
     *
     * @return MappingItemInterface
     */
    private function getItemBySource(MappingInterface $mapping, $sourceSlug)
    {
        if ($sourceSlug === $mapping->getLeftItem()->getSource()->getSlug()) {
            return $mapping->getLeftItem();
        }

        return $mapping->getRightItem();
    }
}
