<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


use Symfony\Component\Security\Core\User\UserInterface;

interface TracableInterface
{
    /**
     * Set entity created by
     *
     * @param UserInterface $user
     */
    public function setCreatedBy(UserInterface $user);

    /**
     * Get entity created by
     *
     * @return UserInterface $user
     */
    public function getCreatedBy();

    /**
     * Set entity creation date
     *
     * @param \DateTime $date
     */
    public function setCreatedAt(\DateTime $date);

    /**
     * Return entity creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Set entity latest update date
     *
     * @param \DateTime $date
     */
    public function setUpdatedAt(\DateTime $date);


    /**
     * Return entity lastest edit date
     *
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * Set entity delete date
     *
     * @param \DateTime $date
     */
    public function setDeletedAt(\DateTime $date);

    /**
     * Return entity creation date
     *
     * @return \DateTime
     */
    public function getDeletedAt();
}