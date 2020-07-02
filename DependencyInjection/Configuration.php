<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('ch_kvk_api');

        $treeBuilder
            ->getRootNode()
            ->children()
                ->scalarNode('uri')
                    ->cannotBeEmpty()
                    ->defaultValue('https://api.kvk.nl:443/')
                ->end()
                ->scalarNode('api_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->booleanNode('use_testing_account')
                    ->defaultFalse()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
