<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Tests\Mock\ModelManager;

use Tadcka\Component\Mapper\Model\Manager\SourceManagerInterface;
use Tadcka\Component\Mapper\Model\SourceInterface;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/13/14 4:36 PM
 */
class MockSourceManager implements SourceManagerInterface
{
    /**
     * @var array|SourceInterface[]
     */
    private $sources = array();

    /**
     * {@inheritdoc}
     */
    public function findBySlug($slug)
    {
        if ($this->has($slug)) {
            return $this->sources[$slug];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function findManyBySlugs(array $slugs)
    {
        $sources = array();
        foreach ($slugs as $slug) {
            if ($this->has($slug)) {
                $sources[] = $this->sources[$slug];
            }
        }

        return $sources;
    }

    /**
     * {@inheritdoc}
     */
    public function add(SourceInterface $source, $save = false)
    {
        $this->sources[$source->getSlug()] = $source;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(SourceInterface $source, $save = false)
    {
        if ($this->has($source->getSlug())) {
            unset($this->sources[$source->getSlug()]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->sources = array();
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return 'Tadcka\Component\Mapper\Model\Source';
    }

    /**
     * Check or has source by slug.
     *
     * @param string $slug
     *
     * @return bool
     */
    private function has($slug)
    {
        return isset($this->sources[$slug]);
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $className = $this->getClass();
        $source = new $className;

        return $source;
    }

    /**
     * @return array|SourceInterface[]
     */
    public function getSources()
    {
        return $this->sources;
    }
}
