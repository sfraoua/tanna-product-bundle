<?php

namespace Tanna\ProductBundle\DependencyInjection;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\Events;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class TannaProductExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config/services'));
        //declaring user classes as parameters
        $container->setParameter('tanna_product.user_classes.product', $config['class']['product']);
        $container->setParameter('tanna_product.user_classes.product_variant', $config['class']['product_variant']);
        $container->setParameter('tanna_product.db_driver', $config['db_driver']);


        //load services
        $loader->load(sprintf('%s.yml', $config['db_driver']));
        $loader->load('product.yml');

    }

    /**
     * Allow an extension to prepend the extension configurations.
     *
     * @param ContainerBuilder $container
     */
    public function prepend(ContainerBuilder $container)
    {
            $configs = $container->getExtensionConfig($this->getAlias());
            $tannaConfig = $this->processConfiguration(new Configuration(), $configs);
        if($tannaConfig['db_driver']=='mongodb'){
            $forInsertion = array(
                    'resolve_target_documents' => array(
                        'Tanna\ProductBundle\Model\ProductInterface' => $tannaConfig['class']['product'],
                        'Tanna\ProductBundle\Model\ProductVariantInterface' => $tannaConfig['class']['product_variant'],
                    )
            );
        }
        $container->prependExtensionConfig('doctrine_mongodb', $forInsertion);

    }

    public function getAlias()
    {
        return 'tanna_product';
    }
}
