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
    protected $main;

    /**
     * @var MappingItemInterface
     */
    protected $leftItem;

    /**
     * @var MappingItemInterface
     */
    protected $rightItem;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->main = false;
    }

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
    public function setLeftItem(MappingItemInterface $leftItem)
    {
        $this->leftItem = $leftItem;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLeftItem()
    {
        return $this->leftItem;
    }

    /**
     * {@inheritdoc}
     */
    public function setRightItem(MappingItemInterface $rightItem)
    {
        $this->rightItem = $rightItem;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRightItem()
    {
        return $this->rightItem;
    }
}
