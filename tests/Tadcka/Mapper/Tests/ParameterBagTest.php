<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Tests;

use PHPUnit_Framework_TestCase as TestCase;
use Tadcka\Mapper\ParameterBag;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:04 PM
 */
class ParameterBagTest extends TestCase
{
    /**
     * @var ParameterBag
     */
    private $bag;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->bag = new ParameterBag('en');
    }

    public function testSet()
    {
        $data = array(1, 2, 3);
        $this->bag->set('test_key', $data);

        $this->assertEquals($data, $this->bag->get('test_key'));
    }

    public function testGetWithDefaultValue()
    {
        $this->assertEquals('test', $this->bag->get('test_key', 'test'));
    }
}
