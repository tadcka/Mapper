<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Helper;

use Tadcka\Component\Mapper\MapperItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since  14.8.17 17.37
 */
class MapperHelper
{
    /**
     * Get mapper item full path.
     *
     * @param string $slug
     * @param MapperItemInterface $tree
     *
     * @return array
     */
    public function getMapperItemFullPath($slug, MapperItemInterface $tree)
    {
        return array_reverse($this->findRecursiveFullPath($slug, $tree));
    }

    /**
     * Find recursive full path.
     *
     * @param string $slug
     * @param MapperItemInterface $mapperItem
     *
     * @return array
     */
    private function findRecursiveFullPath($slug, MapperItemInterface $mapperItem)
    {
        foreach ($mapperItem->getChildren() as $child) {
            if ($slug === $child->getSlug()) {
                return array($slug => $child->getName());
            } else {
                $path = $this->findRecursiveFullPath($slug, $child);
                if (0 < count($path)) {
                    $path[$child->getSlug()] = $child->getName();

                    return $path;
                }
            }
        }

        return array();
    }
}
