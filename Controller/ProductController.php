<?php

namespace Tanna\ProductBundle\Controller;

use AppBundle\Document\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tanna\ProductBundle\Event\GetResponseProductEvent;
use Tanna\ProductBundle\Form\Type\ProductType;
use Tanna\ProductBundle\TannaProductBundleEvents;

class ProductController extends Controller
{
    public function indexAction(Request $request)
    {
        $dispatcher = $this->get('event_dispatcher');
        $product = new Product();
        $event = new GetResponseProductEvent($product, $request);
        $dispatcher->dispatch(TannaProductBundleEvents::CREATE_PRODUCT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $productManager = $this->get('tanna_product.product_manager');
        $productManager->doFlush($product);

        return $this->render('TannaProductBundle:Default:index.html.twig', array('products'=>$productManager->getAll()));
    }

    public function createAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:Default:index.html.twig', array('form'=>$productHandler->getForm()->createView()));
    }

    public function showAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:Default:index.html.twig', array('form'=>$productHandler->getForm()->createView()));
    }

    public function updateAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:Default:index.html.twig', array('form'=>$productHandler->getForm()->createView()));
    }

    public function deleteAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:Default:index.html.twig', array('form'=>$productHandler->getForm()->createView()));
    }
}
