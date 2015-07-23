<?php

namespace Tanna\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('TannaProductBundle:Default:index.html.twig');
    }
}
