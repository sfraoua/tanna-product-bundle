<?php

namespace Tanna\ProductBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;

use Documents\Product;
use Symfony\Component\Security\Core\User\UserInterface;
use Tanna\ProductBundle\Manager\ManagerInterface;
use Tanna\ProductBundle\Model\ProductInterface;

class ProductManager extends BaseManager{

    public function __construct(ObjectManager $om,  $className){
        parent::__construct($om, $className);
    }

}
