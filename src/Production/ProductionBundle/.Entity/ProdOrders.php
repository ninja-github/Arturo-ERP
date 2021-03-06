<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdOrders
 */
class ProdOrders
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $docNo;

    /**
     * @var string
     */
    private $docNavision;

    /**
     * @var integer
     */
    private $docItems;

    /**
     * @var \DateTime
     */
    private $docDate;

    /**
     * @var integer
     */
    private $docStatus;

    /**
     * @var \DateTime
     */
    private $acceptedDate;

    /**
     * @var \DateTime
     */
    private $paymentDate;

    /**
     * @var float
     */
    private $paymentExchange;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \Production\ProductionBundle\Entity\BackUsersOld
     */
    private $backUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prodPrice;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prodPrice = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set docNo
     *
     * @param string $docNo
     * @return ProdOrders
     */
    public function setDocNo($docNo)
    {
        $this->docNo = $docNo;

        return $this;
    }

    /**
     * Get docNo
     *
     * @return string 
     */
    public function getDocNo()
    {
        return $this->docNo;
    }

    /**
     * Set docNavision
     *
     * @param string $docNavision
     * @return ProdOrders
     */
    public function setDocNavision($docNavision)
    {
        $this->docNavision = $docNavision;

        return $this;
    }

    /**
     * Get docNavision
     *
     * @return string 
     */
    public function getDocNavision()
    {
        return $this->docNavision;
    }

    /**
     * Set docItems
     *
     * @param integer $docItems
     * @return ProdOrders
     */
    public function setDocItems($docItems)
    {
        $this->docItems = $docItems;

        return $this;
    }

    /**
     * Get docItems
     *
     * @return integer 
     */
    public function getDocItems()
    {
        return $this->docItems;
    }

    /**
     * Set docDate
     *
     * @param \DateTime $docDate
     * @return ProdOrders
     */
    public function setDocDate($docDate)
    {
        $this->docDate = $docDate;

        return $this;
    }

    /**
     * Get docDate
     *
     * @return \DateTime 
     */
    public function getDocDate()
    {
        return $this->docDate;
    }

    /**
     * Set docStatus
     *
     * @param integer $docStatus
     * @return ProdOrders
     */
    public function setDocStatus($docStatus)
    {
        $this->docStatus = $docStatus;

        return $this;
    }

    /**
     * Get docStatus
     *
     * @return integer 
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }

    /**
     * Set acceptedDate
     *
     * @param \DateTime $acceptedDate
     * @return ProdOrders
     */
    public function setAcceptedDate($acceptedDate)
    {
        $this->acceptedDate = $acceptedDate;

        return $this;
    }

    /**
     * Get acceptedDate
     *
     * @return \DateTime 
     */
    public function getAcceptedDate()
    {
        return $this->acceptedDate;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return ProdOrders
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set paymentExchange
     *
     * @param float $paymentExchange
     * @return ProdOrders
     */
    public function setPaymentExchange($paymentExchange)
    {
        $this->paymentExchange = $paymentExchange;

        return $this;
    }

    /**
     * Get paymentExchange
     *
     * @return float 
     */
    public function getPaymentExchange()
    {
        return $this->paymentExchange;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return ProdOrders
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = new \DateTime();

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProdOrders
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new \DateTime();

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set backUser
     *
     * @param \Production\ProductionBundle\Entity\BackUsersOld $backUser
     * @return ProdOrders
     */
    public function setBackUser(\Production\ProductionBundle\Entity\BackUsersOld $backUser = null)
    {
        $this->backUser = $backUser;

        return $this;
    }

    /**
     * Get backUser
     *
     * @return \Production\ProductionBundle\Entity\BackUsersOld 
     */
    public function getBackUser()
    {
        return $this->backUser;
    }

    /**
     * Add prodPrice
     *
     * @param \Production\ProductionBundle\Entity\ProdPrices $prodPrice
     * @return ProdOrders
     */
    public function addProdPrice(\Production\ProductionBundle\Entity\ProdPrices $prodPrice)
    {
        $this->prodPrice[] = $prodPrice;

        return $this;
    }

    /**
     * Remove prodPrice
     *
     * @param \Production\ProductionBundle\Entity\ProdPrices $prodPrice
     */
    public function removeProdPrice(\Production\ProductionBundle\Entity\ProdPrices $prodPrice)
    {
        $this->prodPrice->removeElement($prodPrice);
    }

    /**
     * Get prodPrice
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProdPrice()
    {
        return $this->prodPrice;
    }
    
    public function __toString()
    {
        return $this->docNo;
    }
}
