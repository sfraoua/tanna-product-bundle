<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


use Doctrine\Common\Collections\Collection;

interface ProductVariantInterface extends SellableInterface, TimestampableInterface, SlugableInterface, SEOInterface
{

    /**
     * Add float (can be negative) for editing parent product price
     *
     *
     * @param float $product
     */
    public function setExtraPrice($price);

    /**
     * Return product variant extra price
     *
     * @return ProductInterface
     */
    public function getExtraPrice();

    /**
     * Set the parent product for this variant
     *
     * @param ProductInterface $product
     */
    public function setParentProduct(ProductInterface $product);

    /**
     * Return the parent product
     *
     * @return ProductInterface
     */
    public function getParentProduct();

}