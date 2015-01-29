<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Source\Type;

use Tadcka\Mapper\Exception\SourceTypeException;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 1/26/15 11:02 PM
 */
class SourceTypeRegistry
{
    /**
     * @var array|SourceTypeInterface[]
     */
    private $types;

    public function __construct()
    {
        $this->types = [];
    }

    /**
     * Add mapper source type.
     *
     * @param SourceTypeInterface $type
     * @param string $alias
     *
     * @throws SourceTypeException
     */
    public function add(SourceTypeInterface $type, $alias)
    {
        if ($alias !== $type->getName()) {
            throw new SourceTypeException(sprintf('Mapper source type %s alias is not valid!', $alias));
        }

        $this->types[$alias] = $type;
    }

    /**
     * Get mapper source type by name.
     *
     * @param string $name
     *
     * @return SourceTypeInterface
     *
     * @throws SourceTypeException
     */
    public function getType($name)
    {
        if (isset($this->types[$name])) {
            return $this->types[$name];
        }

        throw new SourceTypeException(sprintf('Mapper source type %s not found!', $name));
    }

    /**
     * Get mapper source types.
     *
     * @return array|SourceTypeInterface[]
     */
    public function getTypes()
    {
        return $this->types;
    }
}
