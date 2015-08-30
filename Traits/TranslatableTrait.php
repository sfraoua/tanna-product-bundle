<?php
namespace Tanna\ProductBundle\Traits;

use Tanna\ProductBundle\Validator\Constraints as TannaAssert;

/**
 * @TannaAssert\MultiTitle
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait TranslatableTrait
{


    /**
     * Return a translated name
     *
     * @return string
     */
    public function getLocaleName()
    {
        return $this->getName();
    }

    /**
     * Return a translated description
     *
     * @return string
     */
    public function getLocaleDesciption()
    {
        return $this->getDescription();
    }

    /**
     * Return a translated meta title
     *
     * @return string
     */
    public function getLocaleTitle()
    {
        return $this->getTitle();
    }

    /**
     * Return a translated meta description
     *
     * @return string
     */
    public function getLocaleMetaDescription()
    {
        return $this->getMetaDescription();
    }

}