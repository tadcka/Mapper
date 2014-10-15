<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/12/14 11:51 PM
 */
class MapperItem implements MapperItemInterface
{
    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $canUseForMapping;

    /**
     * @var array|MapperItemInterface[]
     */
    private $children = array();

    /**
     * @var int
     */
    private $priority;

    /**
     * Constructor.
     *
     * @param string $slug
     * @param string $name
     * @param bool $canUseForMapping
     * @param int $priority
     */
    public function __construct($slug, $name, $canUseForMapping = true, $priority = 0)
    {
        $this->slug = $slug;
        $this->name = $name;
        $this->canUseForMapping = $canUseForMapping;
        $this->priority = $priority;
    }

    /**
     * {@inheritdoc}
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
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
    public function addChild(MapperItemInterface $child)
    {
        $this->children[] = $child;
    }

    /**
     * {@inheritdoc}
     */
    public function canUseForMapping()
    {
        return $this->canUseForMapping;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return $this->priority;
    }

    private function sortChildren()
    {
        uasort(
            $this->children,
            function (MapperItemInterface $first, MapperItemInterface $second) {
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
