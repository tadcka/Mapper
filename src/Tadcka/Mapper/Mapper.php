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

use Tadcka\Mapper\Source\Source;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:30 AM
 */
class Mapper
{
    const NAME = 'tadcka_mapper';

    /**
     * @var Source
     */
    private $leftSource;

    /**
     * @var Source
     */
    private $rightSource;

    /**
     * Constructor.
     *
     * @param Source $leftSource
     * @param Source $rightSource
     */
    public function __construct(Source $leftSource, Source $rightSource)
    {
        $this->leftSource = $leftSource;
        $this->rightSource = $rightSource;
    }

    /**
     * Get left mapper source.
     *
     * @return Source
     */
    public function getLeftSource()
    {
        return $this->leftSource;
    }

    /**
     * Get right mapper source.
     *
     * @return Source
     */
    public function getRightSource()
    {
        return $this->rightSource;
    }
}
