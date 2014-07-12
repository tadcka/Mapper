<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Model;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.7.12 14.12
 */
class Source implements SourceInterface
{
    /**
     * @var string
     */
    protected $slug;

    /**
     * @var array|CategoryInterface[]
     */
    protected $categories;

    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->categories = array();
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
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * {@inheritdoc}
     */
    public function addCategory(CategoryInterface $category)
    {
        $this->categories[] = $category;
    }

    /**
     * {@inheritdoc}
     */
    public function removeCategory(CategoryInterface $category)
    {
        foreach ($this->categories as $key => $value) {
            if (spl_object_hash($category) === spl_object_hash($value)) {
                unset($this->categories[$key]);

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
