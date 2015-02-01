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

use Tadcka\Mapper\Source\Data\SourceDataFactoryInterface;
use Tadcka\Mapper\Source\Type\SourceTypeInterface;
use Tadcka\Mapper\Source\Type\SourceTypeRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/27/15 12:19 AM
 */
class SourceFactory
{
    /**
     * @var SourceTypeRegistry
     */
    private $typeRegistry;

    /**
     * Constructor.
     *
     * @param SourceTypeRegistry $typeRegistry
     */
    public function __construct(SourceTypeRegistry $typeRegistry)
    {
        $this->typeRegistry = $typeRegistry;
    }

    /**
     * Create mapper source.
     *
     * @param string|SourceTypeInterface $type
     * @param SourceDataFactoryInterface $dataFactory
     * @param string $name
     *
     * @return Source
     */
    public function create($type, SourceDataFactoryInterface $dataFactory, $name)
    {
        if (is_string($type)) {
            $type = $this->typeRegistry->getType($type);
        }

        return new Source($type, $dataFactory, $name);
    }
}
