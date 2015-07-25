<?php
/**
 * Created by PhpStorm.
 * User: liya
 * Date: 25/07/15
 * Time: 02:11
 */

namespace Tanna\ProductBundle\Form\Handler;


use Symfony\Component\Form\Form;

interface FormHandlerInterface
{
    /**
     * @return Form
     */
    public function getForm();
}