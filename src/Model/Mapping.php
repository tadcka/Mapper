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
 * @since 14.7.12 14.09
 */
class Mapping implements MappingInterface
{
    /**
     * @var bool
     */
    protected $main = false;

    /**
     * @var CategoryInterface
     */
    protected $left;

    /**
     * @var CategoryInterface
     */
    protected $right;

    /**
     * {@inheritdoc}
     */
    public function setMain($main)
    {
        $this->main = $main;
    }

    /**
     * {@inheritdoc}
     */
    public function isMain()
    {
        return $this->main;
    }

    /**
     * {@inheritdoc}
     */
    public function setLeft(CategoryInterface $left)
    {
        $this->left = $left;
    }

    /**
     * {@inheritdoc}
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * {@inheritdoc}
     */
    public function setRight(CategoryInterface $right)
    {
        $this->right = $right;
    }

    /**
     * {@inheritdoc}
     */
    public function getRight()
    {
        return $this->right;
    }
}
