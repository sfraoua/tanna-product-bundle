<?php
namespace Tanna\ProductBundle\Traits;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait SellableTrait
{

    protected $price;
    protected $isActive;
    protected $isAvailable;
    protected $isDeleted;


    /**
     * Check if product or a product variant is available
     *
     * @return bool
     */
    public function isAvailable()
    {
        return $this->isAvailable();
    }

    /**
     * Change availabality for a product / product variant
     * @param $isAvailabe bool
     */
    public function setIsAvailable($isAvailabe)
    {
        $this->isAvailable = $isAvailabe;
    }

    /**
     * Check if product or a product variant is deleted
     *
     * @return bool
     */
    public function isDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set a product / product variant as deleted
     * @param $isDeleted bool
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }


    /**
     * return a product or product variant price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set default price for a product
     * For product variant, please use extraPrice to edit parent Product price
     * @param $price float
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Check if product or a product variant is active
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * Set a product / product variant as active
     * @param $isDActive bool
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
}