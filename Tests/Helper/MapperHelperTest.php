<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Helper;

use Tadcka\Component\Mapper\Helper\MapperHelper;
use Tadcka\Component\Mapper\MapperItem;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.8.17 17.51
 */
class MapperHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMapperItemFullPath()
    {
        $mapperItem = $this->createMapperItemTree();
        $helper = new MapperHelper();
        $path = $helper->getMapperItemFullPath('test_5_3_5', $mapperItem);

        $this->assertEquals(array('test_5' => 'test_5', 'test_5_3' => 'test_5_3', 'test_5_3_5' => 'test_5_3_5'), $path);

        $path = $helper->getMapperItemFullPath('test_1_5', $mapperItem);

        $this->assertEquals(array('test_1' => 'test_1', 'test_1_5' => 'test_1_5'), $path);

        $path = $helper->getMapperItemFullPath('fake', $mapperItem);

        $this->assertEmpty($path);
    }

    private function createMapperItemTree()
    {
        $mapperItem = $this->createMapperItem('test');

        for ($i = 1; $i <= 5; $i++) {
            $one = $this->createMapperItem('test_' . $i);
            for ($j = 1; $j <= 5; $j++) {
                $two = $this->createMapperItem('test_' . $i . '_' . $j);
                for ($k = 1; $k <= 5; $k++) {
                    $two->addChild($this->createMapperItem('test_' . $i . '_' . $j . '_' . $k));
                }
                $one->addChild($two);
            }
            $mapperItem->addChild($one);
        }

        return $mapperItem;
    }

    private function createMapperItem($slug)
    {
        return new MapperItem($slug, $slug);
    }
}
