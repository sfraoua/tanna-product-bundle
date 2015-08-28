<?php
namespace Tanna\ProductBundle\Traits;

use Tanna\ProductBundle\Validator\Constraints as TannaAssert;

/**
 * @TannaAssert\MultiTitle
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait MultiLanguageTrait
{
    protected $nameEn;
    protected $nameFr;
    protected $descriptionFr;
    protected $descriptionEn;

    /**
     * Return entity name
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    }

    /**
     * Return entity name
     *
     * @return string
     */
    public function getNameFr()
    {
        return $this->nameFr;
    }

    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setNameFr($nameFr)
    {
        $this->nameFr = $nameFr;
    }


    /**
     * Return entity name
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;
    }

    /**
     * Return entity name
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;
    }

}