<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Model;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.12
 */
class MapperSource implements MapperSourceInterface
{
    /**
     * @var string
     */
    protected $slug;

    /**
     * @var array|MapperItemInterface[]
     */
    protected $items;

    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->items = array();
        $this->createdAt = new \DateTime();
    }

    /**
     * {@inheritdoc}
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
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
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(MapperItemInterface $item)
    {
        $this->items[] = $item;
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem(MapperItemInterface $item)
    {
        foreach ($this->items as $key => $value) {
            if (spl_object_hash($item) === spl_object_hash($value)) {
                unset($this->items[$key]);

                break;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
