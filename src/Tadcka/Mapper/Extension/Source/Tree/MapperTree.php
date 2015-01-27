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

use Tadcka\Mapper\MapperDataInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:40 AM
 */
class MapperTree implements MapperDataInterface
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

    /**
     * {@inheritdoc}
     */
    public function getItem($id)
    {
        // TODO: Implement getItem() method.
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
}
