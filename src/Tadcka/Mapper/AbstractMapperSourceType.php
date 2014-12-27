<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper;

use Tadcka\Mapper\Cache\MapperSourceCacheInterface;
use Tadcka\Mapper\Cache\NullMapperSourceCache;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 14.12.27 16.15
 */
abstract class AbstractMapperSourceType implements MapperSourceTypeInterface
{
    /**
     * @var MapperSourceCacheInterface
     */
    private $cache;

    /**
     * @var MapperSourceFactoryInterface
     */
    private $factory;

    /**
     * Constructor.
     *
     * @param MapperSourceFactoryInterface $factory
     */
    public function __construct(MapperSourceFactoryInterface $factory)
    {
        $this->cache = new NullMapperSourceCache();
        $this->factory = $factory;
    }

    /**
     * Set mapper source cache.
     *
     * @param MapperSourceCacheInterface $cache
     */
    public function setCache(MapperSourceCacheInterface $cache)
    {
        $this->cache = $cache;
    }

    /**
     * {@inheritdoc}
     */
    public function getSource($name, ParameterBag $parameters)
    {
        $cacheKey = $this->getCacheKey($name, $parameters);
        $source = $this->cache->fetch($cacheKey);

        if (null === $source) {
            $source = $this->factory->create($parameters);

            $this->cache->save($cacheKey, $source);
        }

        return $source;
    }

    /**
     * @param string $name
     * @param string $locale
     *
     * @return string
     */
    private function getCacheKey($name, $locale)
    {
        if ($locale) {
            $name .= '_' . $locale;
        }

        return strtolower($name);
    }
}
