<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface SlugableInterface
{
    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setName($name);

    /**
     * Return entity name
     *
     * @return string
     */
    public function getName();

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