<?php
namespace Tanna\ProductBundle\Traits;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait SEOTrait
{
    protected $title;
    protected $metaDescription;


    /**
     * Set title for a html page
     * @param $title string
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Html page name
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set MetaDescription for html page
     *
     * @param $metaDescription string
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * Html meta description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

}