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
use Tadcka\Mapper\MapperItemInterface;
use Tadcka\Mapper\Model\CategoryInterface;
use Tadcka\Mapper\Model\Manager\MappingManagerInterface;
use Tadcka\Mapper\Model\MapperSourceInterface;

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
     * @return null|MapperSourceInterface
     */
    public function getSource($name);

    /**
     * Get mapper.
     *
     * @param MapperSourceInterface $source
     * @param string $locale
     *
     * @return MapperItemInterface
     *
     * @throws ResourceNotFoundException
     */
    public function getMapper(MapperSourceInterface $source, $locale);

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
     * @param MapperItemInterface $mapperItem
     *
     * @return array|MapperItemInterface[]
     */
    public function getMapperItems(array $categories, MapperItemInterface $mapperItem);

    /**
     * Get mapper item by category.
     *
     * @param string $categorySlug
     * @param MapperItemInterface $mapperItem
     *
     * @return null|MapperItemInterface
     */
    public function getMapperItemByCategory($categorySlug, MapperItemInterface $mapperItem);

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