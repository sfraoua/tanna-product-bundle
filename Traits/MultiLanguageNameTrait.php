<?php
namespace Tanna\ProductBundle\Traits;

use Symfony\Component\Security\Core\User\UserInterface;
use Tanna\ProductBundle\Validator\Constraints as TannaAssert;

/**
 * @TannaAssert\MultiTitle
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait MultiLanguageNameTrait
{
    protected $nameEn;
    protected $nameFr;

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


}