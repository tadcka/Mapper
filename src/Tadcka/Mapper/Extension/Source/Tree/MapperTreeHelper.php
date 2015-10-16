<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Extension\Source\Tree;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 2/1/15 2:04 PM
 */
class MapperTreeHelper
{
    /**
     * Get mapper tree item full path.
     *
     * @param string $itemId
     * @param MapperTreeItemInterface $tree
     *
     * @return array
     */
    public function getTreeItemFullPath($itemId, MapperTreeItemInterface $tree)
    {
        $path = $this->findRecursiveFullPath($itemId, $tree);

        if (0 < count($path)) {
            $path[$tree->getId()] = $tree->getTitle();
            $path = array_reverse($path, true);
        }

        return $path;
    }

    /**
     * Find recursive full path.
     *
     * @param string $itemId
     * @param MapperTreeItemInterface $tree
     *
     * @return array
     */
    private function findRecursiveFullPath($itemId, MapperTreeItemInterface $tree)
    {
        foreach ($tree->getChildren() as $child) {
            if ($itemId === $child->getId()) {
                return [$itemId => $child->getTitle()];
            } else {
                $path = $this->findRecursiveFullPath($itemId, $child);
                if (0 < count($path)) {
                    $path[$child->getId()] = $child->getTitle();

                    return $path;
                }
            }
        }

        return [];
    }
}
