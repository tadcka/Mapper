<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Provider;

use Tadcka\Mapper\Model\MappingInterface;
use Tadcka\Mapper\Model\MappingSourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:36 PM
 */
interface MappingProviderInterface
{
    /**
     * Get mapper item main mapping.
     *
     * @param string $itemSlug
     * @param string $sourceSlug
     * @param string $otherSourceSlug
     *
     * @return null|MappingInterface
     */
    public function getItemMainMapping($itemSlug, $sourceSlug, $otherSourceSlug);

    /**
     * Get mapping source.
     *
     * @param string $name
     *
     * @return null|MappingSourceInterface
     */
    public function getSource($name);
}
