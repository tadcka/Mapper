<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Provider;

use Tadcka\Component\Mapper\MapperItemInterface;
use Tadcka\Component\Mapper\Model\SourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 4:24 PM
 */
interface MapperProviderInterface
{
    /**
     * Get mapper source.
     *
     * @param string $name
     *
     * @return null|SourceInterface
     */
    public function getSource($name);

    /**
     * Get mapper.
     *
     * @param SourceInterface $source
     * @param string $locale
     *
     * @return MapperItemInterface
     */
    public function getMapper(SourceInterface $source, $locale);
}
