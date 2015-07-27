<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Event;


use Symfony\Component\HttpFoundation\Request;
use Tanna\ProductBundle\Model\ProductInterface;

class GetResponseProductEvent extends ProductEvent
{
    private $response;

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }


}