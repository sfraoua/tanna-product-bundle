<?php
namespace Tanna\ProductBundle\Traits;

use Tanna\ProductBundle\Validator\Constraints as TannaAssert;

/**
 * @TannaAssert\MultiTitle
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait NameableTrait
{
    protected $name;
    protected $description;

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
     * Set entity name
     *
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Return entity name
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set entity name
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}