<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\SourceType\Tree;

use Tadcka\Mapper\MapperSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:40 AM
 */
class MapperTree implements MapperSourceInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var MapperTreeItemInterface
     */
    private $tree;

    /**
     * Constructor.
     *
     * @param string $name
     * @param MapperTreeItemInterface $tree
     */
    public function __construct($name, MapperTreeItemInterface $tree)
    {
        $this->name = $name;
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
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
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
