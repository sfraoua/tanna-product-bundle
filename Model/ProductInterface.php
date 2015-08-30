<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


use Doctrine\Common\Collections\Collection;

interface ProductInterface extends SellableInterface, SlugableInterface, TracableInterface, TranslatableInterface
{

    /**
     * Add a variant to product variants
     *
     * @return null | Collection
     */
    public function addVariant(ProductVariantInterface $variant);

    /**
     * Check if product has variant
     *
     * @return null | Collection
     */
    public function hasVariant(ProductVariantInterface $variant);

    /**
     * Remove variant from product variants
     *
     * @return null | Collection
     */
    public function removeVariant(ProductVariantInterface $variant);

}