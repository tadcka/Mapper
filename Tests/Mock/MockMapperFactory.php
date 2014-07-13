<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Mock;

use Tadcka\Component\Mapper\MapperFactoryInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 1:02 AM
 */
class MockMapperFactory implements MapperFactoryInterface
{

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        return new MockMapper();
    }
}
