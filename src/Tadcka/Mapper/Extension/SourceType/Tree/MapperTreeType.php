<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\SourceType\Tree;

use Tadcka\Mapper\AbstractMapperSourceType;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 12:12 AM
 */
abstract class MapperTreeType extends AbstractMapperSourceType
{

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mapper_tree';
    }
}
