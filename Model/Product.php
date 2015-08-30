<?php
/**
 * Created by PhpStorm.
 * User: Selim Fraoua
 *
 * Date: 24/07/15
 * Time: 02:50
 */

namespace Tanna\ProductBundle\Model;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Tanna\ProductBundle\Traits\SellableTrait;
use Tanna\ProductBundle\Traits\SluggableTrait;
use Tanna\ProductBundle\Traits\TracableTrait;


/**
 * Storage agnostic user object
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

abstract class Product implements ProductInterface
{
    use SluggableTrait;
    use TracableTrait;
    use SellableTrait;
    protected $variants;


    public function __construct(){
        $this->variants = new ArrayCollection();
    }



    /**
     * Return if exists, product variants
     *
     * @return null | Collection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * {@inheritdoc}
     */
    public function setVariants(Collection $variants)
    {
        foreach ($variants as $variant) {
            $this->addVariant($variant);
        }
        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function addVariant(ProductVariantInterface $variant)
    {
        if (!$this->hasVariant($variant)) {
            $variant->setParentProduct($this);
            $this->variants->add($variant);
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasVariant(ProductVariantInterface $variant)
    {
        return $this->variants->contains($variant);
    }

    /**
     * {@inheritdoc}
     */
    public function removeVariant(ProductVariantInterface $variant)
    {
        if ($this->hasVariant($variant)) {
            $this->variants->removeElement($variant);
            $variant->setParentProduct(null);
        }
        return $this;
    }



}