<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Provider;

use Tadcka\Component\Mapper\Exception\ResourceNotFoundException;
use Tadcka\Component\Mapper\MapperItemInterface;
use Tadcka\Component\Mapper\Model\CategoryInterface;
use Tadcka\Component\Mapper\Model\Manager\MappingManagerInterface;
use Tadcka\Component\Mapper\Model\SourceInterface;

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
     * @return null|SourceInterface
     */
    public function getSource($name);

    /**
     * Get mapper.
     *
     * @param SourceInterface $source
     * @param string $locale
     *
     * @return MapperItemInterface
     *
     * @throws ResourceNotFoundException
     */
    public function getMapper(SourceInterface $source, $locale);

    /**
     * Get mapping categories.
     *
     * @param CategoryInterface $category
     * @param SourceInterface $source
     *
     * @return array|CategoryInterface[]
     */
    public function getMappingCategories(CategoryInterface $category, SourceInterface $source);

    /**
     * Get mapper items.
     *
     * @param array|CategoryInterface[] $categories
     * @param MapperItemInterface $mapperItem
     *
     * @return array|MappingManagerInterface[]
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
}
