<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Source\Data;

use Tadcka\Mapper\ParameterBag;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.12.27 16.23
 */
interface SourceDataFactoryInterface
{
    /**
     * Create mapper source.
     *
     * @param ParameterBag $parameters
     *
     * @return SourceDataInterface
     */
    public function create(ParameterBag $parameters);
}
