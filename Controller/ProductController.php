<?php

namespace Tanna\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tanna\ProductBundle\Event\GetResponseProductEvent;
use Tanna\ProductBundle\Form\Type\ProductType;
use Tanna\ProductBundle\TannaProductBundleEvents;

class ProductController extends Controller
{
    public function indexAction(Request $request)
    {
        $productManager = $this->get('tanna_product.product_manager');

        return $this->render('TannaProductBundle:Default:index.html.twig', array('products'=>$productManager->getAll()));
    }

    public function createAction(Request $request)
    {
        $productHandler = $this->get('tanna_product.product_handler');
        //dispatch init event
        $dispatcher = $this->get('event_dispatcher');
        $event = new GetResponseProductEvent($productHandler->getForm()->getData(), $request);
        $dispatcher->dispatch(TannaProductBundleEvents::CREATE_PRODUCT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        if($productHandler->process()){
            $event = new GetResponseProductEvent($productHandler->getForm()->getData(), $request);
            $dispatcher->dispatch(TannaProductBundleEvents::CREATE_PRODUCT_SUCCESS, $event);
        }

        return $this->render('TannaProductBundle:Default:create.html.twig', array('form'=>$productHandler->getForm()->createView()));
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
