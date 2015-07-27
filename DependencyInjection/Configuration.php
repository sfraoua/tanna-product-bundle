<?php

namespace Tanna\ProductBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('tanna_product');
        $rootNode
            ->children()
                ->scalarNode('db_driver')
                    ->isRequired()
                    ->validate()
                    ->ifNotInArray(array('orm', 'mongodb'))
                    ->thenInvalid('Invalid database driver "%s"')
                ->end()
            ->end();

        $rootNode
            ->children()
                ->arrayNode('class')
                ->isRequired()
                    ->children()
                        ->scalarNode('product')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('product_variant')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
