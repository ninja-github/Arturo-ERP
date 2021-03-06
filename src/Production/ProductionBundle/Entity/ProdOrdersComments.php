<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdOrdersComments
 */
class ProdOrdersComments {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Production\ProductionBundle\Entity\BackUsersOld
     */
    private $backUser;

    /**
     * @var \Production\ProductionBundle\Entity\ProdOrders
     */
    private $prodOrder;

    /**
     * Constructor
     */
    public function __construct() {
        $this->createdAt = $this->updatedAt = new \DateTime("now");
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return ProdOrdersComments
     */
    public function setComment($comment) {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProdOrdersComments
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return ProdOrdersComments
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set backUser
     *
     * @param \Production\ProductionBundle\Entity\BackUsersOld $backUser
     * @return ProdOrdersComments
     */
    public function setBackUser(\Production\ProductionBundle\Entity\BackUsersOld $backUser = null) {
        $this->backUser = $backUser;

        return $this;
    }

    /**
     * Get backUser
     *
     * @return \Production\ProductionBundle\Entity\BackUsersOld 
     */
    public function getBackUser() {
        return $this->backUser;
    }

    /**
     * Set prodOrder
     *
     * @param \Production\ProductionBundle\Entity\ProdOrders $prodOrder
     * @return ProdOrdersComments
     */
    public function setProdOrder(\Production\ProductionBundle\Entity\ProdOrders $prodOrder = null) {
        $this->prodOrder = $prodOrder;

        return $this;
    }

    /**
     * Get prodOrder
     *
     * @return \Production\ProductionBundle\Entity\ProdOrders 
     */
    public function getProdOrder() {
        return $this->prodOrder;
    }

}
