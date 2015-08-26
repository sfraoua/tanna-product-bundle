<?php

namespace Tanna\ProductBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;

use Documents\Product;
use Symfony\Component\Security\Core\User\UserInterface;
use Tanna\ProductBundle\Manager\ManagerInterface;
use Tanna\ProductBundle\Model\ProductInterface;

abstract class BaseManager implements ManagerInterface {

    protected $om;
    protected $repository;

    public function __construct(ObjectManager $om,  $className){
        $this->om = $om;
        $this->repository = $om->getRepository($className);
    }

    public function getAll(){
        return $this->repository->findAll();
    }

    public function doFlush($product)
    {
        $this->om->persist($product);
        $this->om->flush();

        return $product;
    }

}
