<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface SlugableInterface
{

    /**
     * Set slug for entity
     *
     * @param $slug string
     */
    public function setSlug($slug);

    /**
     * Return entity slug
     *
     * @return string
     */
    public function getSlug();
}