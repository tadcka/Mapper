<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Component\Mapper\Cache;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 7/23/14 10:05 PM
 */
class CacheManager implements CacheManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public function save($filename, $string)
    {
        if (false === is_dir(dirname($filename))) {
            mkdir(dirname($filename), 0777, true);
        }

        file_put_contents($filename, $string);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch($filename)
    {
        if ($this->has($filename)) {
            return file_get_contents($filename);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function has($filename)
    {
        return file_exists($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($filename)
    {
        if ($this->has($filename)) {
            unlink($filename);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeAll($cacheDir, $name)
    {
        foreach ($this->getLocalesCache($cacheDir, $name) as $locale) {
            $this->remove($this->getFilename($cacheDir, $name, $locale));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFilename($cacheDir, $name, $locale)
    {
        return rtrim($cacheDir, '/') . '/' . $name . '_' . $locale . '.json';
    }

    /**
     * {@inheritdoc}
     */
    public function getLocalesCache($cacheDir, $name)
    {
        $locales = array();
        if (is_dir($cacheDir)) {
            foreach (scandir($cacheDir) as $file) {
                $pathInfo = pathinfo($file);
                if ($name === substr($pathInfo['filename'], 0, strlen($name))) {
                    $explode = explode('_', $pathInfo['filename']);
                    $locales[] = $explode[count($explode) - 1];
                }
            }
        }

        return $locales;
    }
}
