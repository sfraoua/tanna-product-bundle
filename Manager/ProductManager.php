<?php

namespace Tanna\ProductBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;

use Tanna\ProductBundle\Manager\ManagerInterface;

class ProductManager implements ManagerInterface {

    private $om;
    private $repository;

    public function __construct(ObjectManager $om,  $className){
        $this->om = $om;
        $this->repository = $om->getRepository($className);
    }

    public function doFlush($product)
    {
        $this->om->persist($product);
        $this->om->flush();

        return $product;
    }

}
