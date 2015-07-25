<?php

namespace Tanna\ProductBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Doctrine\Bundle\MongoDBBundle\DependencyInjection\Compiler\DoctrineMongoDBMappingsPass;
use Tanna\ProductBundle\DependencyInjection\Compiler\ValidationPass;

class TannaProductBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ValidationPass());

        $symfonyVersion = class_exists('Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\RegisterMappingsPass');
        $mappings = array(
            realpath(__DIR__ . '/Resources/config/doctrine-mapping') => 'Tanna\ProductBundle\Model',
        );

//        if ($symfonyVersion && class_exists('Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass')) {
//            $container->addCompilerPass(DoctrineOrmMappingsPass::createXmlMappingDriver($mappings));
//        }
        if ($symfonyVersion && class_exists('Doctrine\Bundle\MongoDBBundle\DependencyInjection\Compiler\DoctrineMongoDBMappingsPass')) {
            $container->addCompilerPass(
                DoctrineMongoDBMappingsPass::createXmlMappingDriver(
                    $mappings,
                    array(),
                    null,
                    array("Tanna\\ProductBundle"=> "")
                )
            );

        }
    }
}
