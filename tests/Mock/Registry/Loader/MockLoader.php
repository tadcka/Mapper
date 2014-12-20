<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests\Mock\Registry\Loader;

use Tadcka\Mapper\Registry\Config\Config;
use Tadcka\Mapper\Registry\Loader\LoaderInterface;
use Tadcka\Mapper\Registry\RegistryInterface;
use Tadcka\Mapper\Tests\Mock\MockMapperFactory;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 1:06 AM
 */
class MockLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(RegistryInterface $registry)
    {
        $registry->add(new Config('test_loader', new MockMapperFactory()));
    }
}
