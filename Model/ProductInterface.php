<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


use Doctrine\Common\Collections\Collection;

interface ProductInterface extends SellableInterface, SlugableInterface, SEOInterface, TracableInterface
{

    /**
     * Return if exists, product variants
     *
     * @return null | Collection
     */
    public function getVariants();

}