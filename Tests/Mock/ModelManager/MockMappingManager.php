<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Mock\ModelManager;

use Tadcka\Component\Mapper\Model\CategoryInterface;
use Tadcka\Component\Mapper\Model\Manager\MappingManagerInterface;
use Tadcka\Component\Mapper\Model\MappingInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/23/14 12:13 AM
 */
class MockMappingManager implements MappingManagerInterface
{
    /**
     * @var array|MappingInterface[]
     */
    private $mappings = array();

    /**
     * {@inheritdoc}
     */
    public function findManyByCategory(CategoryInterface $category)
    {
        // TODO: Implement findManyByCategory() method.
    }

    /**
     * {@inheritdoc}
     */
    public function findManyMappings($categorySlug, $sourceSlug)
    {
        $data = array();
        foreach ($this->mappings as $mapping) {
            if (($categorySlug === $mapping->getLeft()->getSlug()) &&
                ($sourceSlug === $mapping->getRight()->getSource()->getSlug())
            ) {
                $data[] = $mapping;
            } elseif (($categorySlug === $mapping->getRight()->getSlug()) &&
                ($sourceSlug === $mapping->getLeft()->getSource()->getSlug())
            ) {
                $data[] = $mapping;
            }
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * {@inheritdoc}
     */
    public function add(MappingInterface $mapping, $save = false)
    {
        $this->mappings[] = $mapping;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(MappingInterface $mapping, $save = false)
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
        // TODO: Implement getClass() method.
    }
}
