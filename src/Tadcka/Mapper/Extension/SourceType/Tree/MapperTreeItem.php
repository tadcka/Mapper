<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\SourceType\Tree;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:51 PM
 */
class MapperTreeItem implements MapperTreeItemInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var array|MapperTreeItemInterface[]
     */
    private $children;

    /**
     * @var int
     */
    private $priority;

    /**
     * Constructor.
     *
     * @param string $id
     * @param string $title
     */
    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
        $this->active = true;
        $this->children = array();
        $this->priority = 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * {@inheritdoc}
     */
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        $this->sortChildren();

        return $this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function addChild(MapperTreeItemInterface $child)
    {
        $this->children[] = $child;
    }

    /**
     * {@inheritdoc}
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sort item children.
     */
    private function sortChildren()
    {
        uasort(
            $this->children,
            function (MapperTreeItemInterface $first, MapperTreeItemInterface $second) {
                if ($first->getPriority() >= $second->getPriority()) {
                    return 1;
                }

                if ($first->getPriority() < $second->getPriority()) {
                    return -1;
                }
            }
        );
    }
}
