<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Registry;

use Tadcka\Component\Mapper\Registry\Registry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 12:00 AM
 */
class RegistryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return Registry
     */
    private function createRegistry()
    {
        return new Registry();
    }

    public function testEmpty()
    {
        $registry = $this->createRegistry();

    }
}
