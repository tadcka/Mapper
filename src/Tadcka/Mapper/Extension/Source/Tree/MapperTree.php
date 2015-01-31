<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\Source\Tree;

use Tadcka\Mapper\Source\Data\SourceDataInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:40 AM
 */
class MapperTree implements SourceDataInterface
{
    /**
     * @var MapperTreeItemInterface
     */
    private $tree;

    /**
     * Constructor.
     *
     * @param MapperTreeItemInterface $tree
     */
    public function __construct(MapperTreeItemInterface $tree)
    {
        $this->tree = $tree;
    }

    public function catMapping($id)
    {
        $item = $this->getItem($id);
        if (null !== $item) {
            return $item->isActive();
        }

        return false;
    }

    /**
     * {@inheritdoc}
     *
     * @return null|MapperTreeItemInterface
     */
    public function getItem($id)
    {
        return $this->findTreeItem($id, $this->getTree());
    }

    /**
     * Get tree.
     *
     * @return MapperTreeItemInterface
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * Find tree item by id.
     *
     * @param string $id
     * @param MapperTreeItemInterface $item
     *
     * @return null|MapperTreeItemInterface
     */
    public function findTreeItem($id, MapperTreeItemInterface $item)
    {
        if ($id === $item->getId()) {
            return $item;
        }
        foreach ($item->getChildren() as $child) {
            if (null !== $treeItem = $this->findTreeItem($id, $child)) {
                return $treeItem;
            }
        }

        return null;
    }
}
