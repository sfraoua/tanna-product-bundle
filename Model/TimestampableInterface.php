<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace Tanna\ProductBundle\Model;


interface TimestampableInterface
{
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