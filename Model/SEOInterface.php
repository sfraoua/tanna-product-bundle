<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface SEOInterface
{

    /**
     * Set title for a html page
     * @param $title string
     */
    public function setTitle($title);

    /**
     * Html page name
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set MetaDescription for html page
     *
     * @param $metaDescription string
     */
    public function setMetaDescription($metaDescription);

    /**
     * Html meta description
     *
     * @return string
     */
    public function getMetaDescription();
}