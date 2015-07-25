<?php

namespace Tanna\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tanna\ProductBundle\Form\Type\ProductType;

class ProductController extends Controller
{
    public function indexAction()
    {
        $productHandler = $this->get('tanna_product.product_handler');
        $productHandler->process();
        return $this->render('TannaProductBundle:Default:index.html.twig', array('form'=>$productHandler->getForm()->createView()));
    }
}
