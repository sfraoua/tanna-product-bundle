<?php
/**
 * Created by PhpStorm.
 * User: Selim Fraoua
 *
 * Date: 24/07/15
 * Time: 02:50
 */

namespace Tanna\ProductBundle\Model;


/**
 * Storage agnostic user object
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
abstract class Product
{
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $nameCanonical;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameCanonical()
    {
        return $this->nameCanonical;
    }

    /**
     * @param string $nameCanonical
     */
    public function setNameCanonical($nameCanonical)
    {
        $this->nameCanonical = $nameCanonical;
    }



}