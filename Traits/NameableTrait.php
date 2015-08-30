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
     * Return entity name
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->descriptionFr;
    }


}