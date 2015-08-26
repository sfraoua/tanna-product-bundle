<?php
namespace Tanna\ProductBundle\Traits;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */
trait TracableTrait
{
    protected $createdBy;
    protected $createdAt;
    protected $updatedAt;
    protected $deletedAt;


    /**
     * Set entity user
     *
     * @param UserInterface $user
     */
    public function setCreatedBy(UserInterface $user)
    {
        $this->createdBy = $user;
    }

    /**
     * Return entity user author
     *
     * @return UserInterface
     */
    public function getCreatedBy()
    {
        return $this->createdBy ;
    }

    /**
     * Set entity creation date
     *
     * @param \DateTime $date
     */
    public function setCreatedAt(\DateTime $date)
    {
        $this->createdAt = $date;
    }

    /**
     * Return entity creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set entity latest update date
     *
     * @param \DateTime $date
     */
    public function setUpdatedAt(\DateTime $date)
    {
        $this->updatedAt = $date;
    }

    /**
     * Return entity lastest edit date
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set entity delete date
     *
     * @param \DateTime $date
     */
    public function setDeletedAt(\DateTime $date)
    {
        $this->deletedAt = $date;
    }

    /**
     * Return entity creation date
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

}