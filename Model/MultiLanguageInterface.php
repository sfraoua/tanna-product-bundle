<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface MultiLanguageInterface
{
    /**
     * Set French name for entity (like product)
     *
     * @param $name string
     */
    public function setNameFr($nameFr);

    /**
     * Return entity French name
     *
     * @return string
     */
    public function getNameFr();

    /**
     * Set English name for entity (like product)
     *
     * @param $name string
     */
    public function setNameEn($nameEn);

    /**
     * Return entity English name
     *
     * @return string
     */
    public function getNameEn();

    /**
     * Set French description
     *
     * @param $name string
     */
    public function setDescriptionFr($descriptionFr);

    /**
     * Return entity French description
     *
     * @return string
     */
    public function getDescriptionFr();

    /**
     * Return entity English name
     *
     * @return string
     */
    public function getDescriptionEn();

    /**
     * Set English description
     *
     * @param $name string
     */
    public function setDescriptionEn($descriptionEn);

}