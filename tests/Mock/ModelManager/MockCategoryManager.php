<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Mock\ModelManager;

use Tadcka\Mapper\Model\CategoryInterface;
use Tadcka\Mapper\Model\Manager\CategoryManagerInterface;
use Tadcka\Mapper\Model\SourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.8.1 16.33
 */
class MockCategoryManager implements CategoryManagerInterface
{
    /**
     * @var array|CategoryInterface[]
     */
    private $categories = array();

    /**
     * {@inheritdoc}
     */
    public function findBySlugAndSource($slug, SourceInterface $source)
    {
        // TODO: Implement findBySlugAndSource() method.
    }

    /**
     * {@inheritdoc}
     */
    public function findManyBySlugsAndSource(array $slugs, SourceInterface $source)
    {
        $result = array();
        foreach ($slugs as $slug) {
            foreach ($this->categories as $category) {
                if (($slug === $category->getSlug()) &&
                    ((null !== $category->getSource()) && ($source->getSlug() === $category->getSource()->getSlug()))
                ) {
                    $result[] = $category;
                }
            }
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function findManyBySource(SourceInterface $source)
    {
        // TODO: Implement findManyBySource() method.
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $className = $this->getClass();
        $category = new $className;

        return $category;
    }

    /**
     * {@inheritdoc}
     */
    public function add(CategoryInterface $category, $save = false)
    {
        $this->categories[] = $category;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(CategoryInterface $category, $save = false)
    {
        // TODO: Implement remove() method.
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        // TODO: Implement save() method.
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // TODO: Implement clear() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return 'Tadcka\Mapper\Model\Category';
    }

    /**
     * @return array|CategoryInterface[]
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
