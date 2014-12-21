<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Mapper\Provider;

use Tadcka\Mapper\Model\Manager\MappingSourceManagerInterface;
use Tadcka\Mapper\Registry\MapperRegistry;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 12/21/14 11:37 PM
 */
class MappingProvider implements MappingProviderInterface
{
    /**
     * @var MapperRegistry
     */
    private $mapperRegistry;

    /**
     * @var MappingSourceManagerInterface
     */
    private $sourceManager;

    /**
     * Constructor.
     *
     * @param MapperRegistry $mapperRegistry
     * @param MappingSourceManagerInterface $sourceManager
     */
    public function __construct(MapperRegistry $mapperRegistry, MappingSourceManagerInterface $sourceManager)
    {
        $this->mapperRegistry = $mapperRegistry;
        $this->sourceManager = $sourceManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getSource($name)
    {
        $config = $this->mapperRegistry->getConfig($name);
        $source = $this->sourceManager->findBySlug($name);

        if (null !== $config) {
            if (null === $source) {
                $source = $this->sourceManager->create();

                $source->setSlug($config->getName());
                $this->sourceManager->add($source);
            }

            return $source;
        }

        if (null !== $source) {
            $this->sourceManager->remove($source);
        }

        return null;
    }
}
