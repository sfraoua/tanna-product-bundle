<?php
/**
 * Created by PhpStorm.
 * User: liya
 * Date: 25/07/15
 * Time: 02:02
 */

namespace Tanna\ProductBundle\Manager;


interface ManagerInterface
{
    /*
     * Persist an flush entity
     */
    public function doFlush($entity);
}