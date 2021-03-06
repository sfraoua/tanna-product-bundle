<?php
/**
 * Created by PhpStorm.
 * User: liya
 * Date: 26/07/15
 * Time: 01:47
 */

namespace Tanna\ProductBundle\Model;


use Tanna\ProductBundle\Traits\SellableTrait;
use Tanna\ProductBundle\Traits\SluggableTrait;
use Tanna\ProductBundle\Traits\TracableTrait;

abstract class ProductVariant implements ProductVariantInterface
{
    use SluggableTrait;
    use TracableTrait;
    use SellableTrait;

    protected $extraPrice;

    protected $parentProduct;

    /**
     * Return product variant extra price
     *
     * @return ProductInterface
     */
    public function getExtraPrice()
    {
        return $this->extraPrice;
    }

    /**
     * Add float (can be negative) for editing parent product price
     *
     *
     * @param float $product
     */
    public function setExtraPrice($price)
    {
        $this->extraPrice = $price;
    }

    /**
     * Return the parent product
     *
     * @return ProductInterface
     */
    public function getParentProduct()
    {
        return $this->parentProduct;
    }

    /**
     * Set the parent product for this variant
     *
     * @param ProductInterface $product
     */
    public function setParentProduct(ProductInterface $product)
    {
        $this->parentProduct = $product;
    }


}