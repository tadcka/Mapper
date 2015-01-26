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

use Tadcka\Mapper\MapperSourceTypeInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/22/14 12:12 AM
 */
class MapperTreeType implements MapperSourceTypeInterface
{

    /**
     * {@inheritdoc}
     */
    public function getDataClass()
    {
        return 'Tadcka\\Mapper\\Extension\\SourceType\\Tree\\MapperTree';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mapper_tree';
    }
}
