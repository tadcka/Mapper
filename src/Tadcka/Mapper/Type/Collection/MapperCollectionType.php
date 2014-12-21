<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Type\Collection;

use Tadcka\Mapper\MapperSourceInterface;
use Tadcka\Mapper\MapperSourceTypeInterface;
use Tadcka\Mapper\ParameterBag;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:16 AM
 */
class MapperCollectionType implements MapperSourceTypeInterface
{

    /**
     * {@inheritdoc}
     */
    public function buildSource(ParameterBag $parameters)
    {
        // TODO: Implement buildMapper() method.
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mapper_collection';
    }
}
