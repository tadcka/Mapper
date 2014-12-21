<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Provider;

use Tadcka\Mapper\Exception\ResourceNotFoundException;
use Tadcka\Mapper\MappingItemInterface;
use Tadcka\Mapper\Model\CategoryInterface;
use Tadcka\Mapper\Model\Manager\MappingManagerInterface;
use Tadcka\Mapper\Model\MappingSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 4:24 PM
 */
interface MapperProviderInterface
{
    /**
     * Get mapper source.
     *
     * @param string $name
     *
     * @return null|MappingSourceInterface
     */
    public function getSource($name);

    /**
     * Get mapper.
     *
     * @param MappingSourceInterface $source
     * @param string $locale
     *
     * @return MappingItemInterface
     *
     * @throws ResourceNotFoundException
     */
    public function getMapper(MappingSourceInterface $source, $locale);

    /**
     * Get mapping categories.
     *
     * @param CategoryInterface $category
     * @param SourceInterface $otherSource
     *
     * @return array|CategoryInterface[]
     */
    public function getMappingCategories(CategoryInterface $category, SourceInterface $otherSource);

    /**
     * Get mapper items.
     *
     * @param array|CategoryInterface[] $categories
     * @param MappingItemInterface $mapperItem
     *
     * @return array|MappingItemInterface[]
     */
    public function getMapperItems(array $categories, MappingItemInterface $mapperItem);

    /**
     * Get mapper item by category.
     *
     * @param string $categorySlug
     * @param MappingItemInterface $mapperItem
     *
     * @return null|MappingItemInterface
     */
    public function getMapperItemByCategory($categorySlug, MappingItemInterface $mapperItem);

    /**
     * Get main mapping other category slug.
     *
     * @param string $categorySlug
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return null|string
     */
    public function getMainMappingOtherCategorySlug($categorySlug, $sourceSlug, $otherSourceSlug);
}
