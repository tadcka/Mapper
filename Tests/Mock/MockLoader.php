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

use Tadcka\Component\Mapper\Registry\Config\Config;
use Tadcka\Component\Mapper\Registry\Loader\LoaderInterface;
use Tadcka\Component\Mapper\Registry\RegistryInterface;

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
