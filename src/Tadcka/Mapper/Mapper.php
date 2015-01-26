<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:30 AM
 */
class Mapper
{
    const NAME = 'tadcka_mapper';

    /**
     * @var MapperSource
     */
    private $leftSource;

    /**
     * @var MapperSource
     */
    private $rightSource;

    /**
     * Constructor.
     *
     * @param MapperSource $leftSource
     * @param MapperSource $rightSource
     */
    public function __construct(MapperSource $leftSource, MapperSource $rightSource)
    {
        $this->leftSource = $leftSource;
        $this->rightSource = $rightSource;
    }

    /**
     * Get left mapper source.
     *
     * @return MapperSource
     */
    public function getLeftSource()
    {
        return $this->leftSource;
    }

    /**
     * Get right mapper source.
     *
     * @return MapperSource
     */
    public function getRightSource()
    {
        return $this->rightSource;
    }
}
