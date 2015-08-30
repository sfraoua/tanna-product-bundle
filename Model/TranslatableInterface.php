<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


use Symfony\Component\Security\Core\User\UserInterface;

interface TranslatableInterface
{
    /**
     * Return a translated name
     *
     * @return string
     */
    public function getLocaleName();

    /**
     * Return a translated description
     *
     * @return string
     */
    public function getLocaleDescription();

    /**
     * Return a translated meta title
     *
     * @return string
     */
    public function getLocalePageTitle();

    /**
     * Return a translated meta description
     *
     * @return string
     */
    public function getLocaleMetaDescription();


}