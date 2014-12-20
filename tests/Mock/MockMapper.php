<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Mock;

use Tadcka\Mapper\MapperInterface;
use Tadcka\Mapper\MapperItem;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 5:15 PM
 */
class MockMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     */
    public function getMapper($name, $locale)
    {
        return new MapperItem('test', 'mock');
    }
}
