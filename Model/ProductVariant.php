<?php
/**
 * Created by PhpStorm.
 * User: liya
 * Date: 26/07/15
 * Time: 01:47
 */

namespace Tanna\ProductBundle\Model;


abstract class ProductVariant implements ProductVariantInterface
{
    protected $name;
    protected $slug;
    protected $title;
    protected $metaDescription;
    protected $extraPrice;
    protected $isActive;
    protected $isDeleted;
    protected $createdAt;
    protected $updatedAt;
    protected $deletedAt;

    protected $parentProduct;




    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return entity name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug for entity
     *
     * @param $slug string
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Return entity slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }


    /**
     * Set title for a html page
     * @param $title string
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Html page name
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set MetaDescription for html page
     *
     * @param $metaDescription string
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * Html meta description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $metaDescription;
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
     * Return product variant extra price
     *
     * @return ProductInterface
     */
    public function getExtraPrice()
    {
        return $this->extraPrice;
    }


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
     * Set entity creation date
     *
     * @param \DateTime $date
     */
    public function setCreatedAt(\DateTime $date)
    {
        $this->createdAt = $date;
    }

    /**
     * Return entity creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set entity latest update date
     *
     * @param \DateTime $date
     */
    public function setUpdatedAt(\DateTime $date)
    {
        $this->updatedAt = $date;
    }

    /**
     * Return entity lastest edit date
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set entity delete date
     *
     * @param \DateTime $date
     */
    public function setDeletedAt(\DateTime $date)
    {
        $this->deletedAt = $date;
    }

    /**
     * Return entity creation date
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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
     * return a product or product variant price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price + $this->parentProduct->getPrice();
    }

    /**
     * Set default price for a product
     * For product variant, please use extraPrice to edit parent Product price
     * @param $price float
     */
    public function setPrice($price)
    {
    }

}