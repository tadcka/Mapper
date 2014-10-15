<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\MapperItem;

use Tadcka\Component\Mapper\MapperItem;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/22/14 12:08 AM
 */
class MapperItemTest extends \PHPUnit_Framework_TestCase
{
    public function testWithEqualPriority()
    {
        $children = array(
            new MapperItem('test_1', 'test1'),
            new MapperItem('test_2', 'test2'),
            new MapperItem('test_3', 'test3'),
        );

        $item = new MapperItem('test', 'test');
        $item->setChildren($children);

        $key = 1;
        foreach ($item->getChildren() as $child) {
            $this->assertEquals('test_' . $key, $child->getSlug());

            $key++;
        }
    }

    public function testPriority()
    {
        $children = array(
            new MapperItem('test_5', 'test4', true, 4),
            new MapperItem('test_2', 'test1', true, 1),
            new MapperItem('test_1', 'test1', true, 1),
            new MapperItem('test_4', 'test3', true, 3),
            new MapperItem('test_3', 'test2', true, 2),
        );

        $item = new MapperItem('test', 'test');
        $item->setChildren($children);

        $sortedChildren = array_values($item->getChildren());

        $this->assertEquals($children[1], $sortedChildren[0]);
        $this->assertEquals($children[2], $sortedChildren[1]);
        $this->assertEquals($children[4], $sortedChildren[2]);
        $this->assertEquals($children[3], $sortedChildren[3]);
        $this->assertEquals($children[0], $sortedChildren[4]);
    }
}
