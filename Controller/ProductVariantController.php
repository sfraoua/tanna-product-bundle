<?php

namespace Tanna\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tanna\ProductBundle\Event\GetResponseProductEvent;
use Tanna\ProductBundle\Form\Type\ProductType;
use Tanna\ProductBundle\TannaProductBundleEvents;

class ProductVariantController extends Controller
{
    public function indexAction($productId)
    {
        $productManager = $this->get('tanna_product.product_manager');
        $product = $productManager->get($productId);

        return $this->render('TannaProductBundle:ProductVariant:index.html.twig', array('products' => $productManager->getAll()));
    }

    public function createAction(Request $request, $productId)
    {
        //get product
        $productManager = $this->get('tanna_product.product_manager');
        $product = $productManager->get($productId);
        $this->checkProductExistance($product);

        //add parent product
        $productVariantHandler = $this->get('tanna_product.product_variant_handler');
        $productVariantHandler->getForm()->getData()->setParentProduct($product);

        if ($productVariantHandler->process()) {
            return $this->redirect($this->generateUrl('tanna_product_show', ['id' => $product->getId()]));
        }

        return $this->render('TannaProductBundle:ProductVariant:create.html.twig', array('form' => $productVariantHandler->getForm()->createView()));
    }

    public function showAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:ProductVariant:index.html.twig', array('form' => $productHandler->getForm()->createView()));
    }

    public function updateAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:ProductVariant:index.html.twig', array('form' => $productHandler->getForm()->createView()));
    }

    public function deleteAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:ProductVariant:index.html.twig', array('form' => $productHandler->getForm()->createView()));
    }

    private function checkProductExistance($product)
    {
        if (null === $product)
            throw new \Exception('Product not found');
    }
}
