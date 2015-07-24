<?php

namespace Tanna\ProductBundle;

use Doctrine\Bundle\MongoDBBundle\DependencyInjection\Compiler\DoctrineMongoDBMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;

class TannaProductBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        // the base class is only available since symfony 2.3

        $symfonyVersion = class_exists('Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\RegisterMappingsPass');
        $mappings = array(
            realpath(__DIR__ . '/Resources/config/doctrine-mapping') => 'Tanna\ProductBundle\Model',
        );

        if ($symfonyVersion && class_exists('Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass')) {
            $container->addCompilerPass(DoctrineOrmMappingsPass::createXmlMappingDriver($mappings));
        } else {
            $container->addCompilerPass(RegisterMappingsPass::createOrmMappingDriver($mappings));
        }

        if ($symfonyVersion && class_exists('Doctrine\Bundle\MongoDBBundle\DependencyInjection\Compiler\DoctrineMongoDBMappingsPass')) {
            $container->addCompilerPass(DoctrineMongoDBMappingsPass::createXmlMappingDriver($mappings, array()));
        } else {
            $container->addCompilerPass(RegisterMappingsPass::createMongoDBMappingDriver($mappings));
        }
    }
}
