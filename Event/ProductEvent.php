<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Event;


use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Tanna\ProductBundle\Model\ProductInterface;

class ProductEvent extends Event
{
    protected $product;
    protected $request;

    public function __construct(ProductInterface $product, Request $request){
        $this->product = $product;
        $this->request = $request;
    }

    /**
     * @return ProductInterface
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

}