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

use Tadcka\Mapper\Source\SourceItemInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/26/15 10:49 PM
 */
interface SourceDataInterface
{
    /**
     * Check or can mapping source item.
     *
     * @param string $id
     *
     * @return bool
     */
    public function canMapping($id);

    /**
     * Get item.
     *
     * @param string $id
     *
     * @return null|SourceItemInterface
     */
    public function getItem($id);
}
