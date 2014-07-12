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
 * @since 14.7.12 14.09
 */
class Mapping
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
     * @param boolean $main
     */
    public function setMain($main)
    {
        $this->main = $main;
    }

    /**
     * @return boolean
     */
    public function isMain()
    {
        return $this->main;
    }

    /**
     * @param \Tadcka\Component\Mapper\Model\CategoryInterface $left
     */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
     * @return \Tadcka\Component\Mapper\Model\CategoryInterface
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @param \Tadcka\Component\Mapper\Model\CategoryInterface $right
     */
    public function setRight($right)
    {
        $this->right = $right;
    }

    /**
     * @return \Tadcka\Component\Mapper\Model\CategoryInterface
     */
    public function getRight()
    {
        return $this->right;
    }
}
