<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface SellableInterface
{
    /**
     * return a product or product variant price
     *
     * @return float
     */
    public function getPrice();

    /**
     * Set default price for a product or a product variant
     * @param $price float
     */
    public function setPrice($price);

    /**
     * Check if product or a product variant is available
     *
     * @return bool
     */
    public function isAvailable();

    /**
     * Change availabality for a product / product variant
     * @param $isAvailabe bool
     */
    public function setIsAvailable($isAvailabe);

    /**
     * Check if product or a product variant is deleted
     *
     * @return bool
     */
    public function isDeleted();

    /**
     * Set a product / product variant as deleted
     * @param $isDeleted bool
     */

    public function setIsDeleted($isDeleted);


    /**
     * Check if product or a product variant is active
     *
     * @return bool
     */
    public function isActive();

    /**
     * Set a product / product variant as active
     * @param $isDActive bool
     */

    public function setIsActive($isActive);
}
