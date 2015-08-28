<?php
namespace Tanna\ProductBundle\Traits;

/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait SluggableTrait
{
    protected $slug;

    /**
     * Return entity slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set slug for entity
     *
     * @param $slug string
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }


}