<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\Source\Collection;

use Tadcka\Mapper\Source\Data\SourceDataInterface;
use Tadcka\Mapper\Source\SourceItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:43 AM
 */
class MapperCollection implements SourceDataInterface, \Countable
{
    /**
     * @var array|SourceItemInterface[]
     */
    private $collection;

    /**
     * @param array|SourceItemInterface[] $collection
     */
    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * {@inheritdoc}
     */
    public function canMapping($id)
    {
        if (null === $this->getItem($id)) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getItem($id)
    {
        foreach ($this->collection as $item) {
            if ($id === $item->getId()) {
                return $item;
            }
        }

        return null;
    }

    /**
     * Get collection.
     *
     * @return array|MapperCollectionItem[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->collection);
    }
}
