<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Source;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/29/15 10:24 PM
 */
class SourceMetadata
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $options;

    /**
     * Constructor.
     *
     * @param $name
     * @param array $options
     */
    public function __construct($name, array $options)
    {
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get options.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}
