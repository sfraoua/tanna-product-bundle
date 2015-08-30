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
     * Return entity description
     *
     * @return string
     */
    public function getDescription();


}