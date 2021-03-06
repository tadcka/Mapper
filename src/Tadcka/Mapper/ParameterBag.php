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

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 10:50 PM
 */
class ParameterBag
{
    /**
     * @var string
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    /**
     * Set parameter.
     *
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->parameters[strtolower($key)] = $value;
    }

    /**
     * Get parameter.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        $key = strtolower($key);

        if (isset($this->parameters[$key])) {
            return $this->parameters[$key];
        }

        return $default;
    }
}
