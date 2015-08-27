<?php

namespace Tanna\ProductBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Tanna\ProductBundle\Manager\ManagerInterface;

class ProductVariantManager extends  BaseManager {

    public function __construct(ObjectManager $om,  $className){
        parent::__construct($om, $className);
    }
}
