<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface NameableInterface
{

    /**
     * Return entity name
     *
     * @return string
     */
    public function getName();

    /**
     * Set entity name
     *
     */
    public function setName($name);


    /**
     * Return entity description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Set entity description
     *
     */
    public function setDescription($description);


}