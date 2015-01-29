<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\Source\Collection;

use Tadcka\Mapper\Source\Type\SourceTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 1:16 AM
 */
class MapperCollectionType implements SourceTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDataClass()
    {
        return 'Tadcka\\Mapper\\Extension\\Source\\Collection\\MapperCollection';
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mapper_collection';
    }
}
