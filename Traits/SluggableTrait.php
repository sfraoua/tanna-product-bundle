<?php
namespace Tanna\ProductBundle\Traits;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait SluggableTrait
{
    protected $name;
    protected $slug;

    /**
     * Set name for entity (like product)
     *
     * @param $name string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return entity name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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

    /**
     * Return entity slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }


}