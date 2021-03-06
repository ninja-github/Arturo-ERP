<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdPricesDetail
 */
class ProdPricesDetail {

    /**
     * @var float
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \Production\ProductionBundle\Entity\BackGroupsColors
     */
    private $backGroupsColor;

    /**
     * @var \Production\ProductionBundle\Entity\BackModels
     */
    private $backModel;

    /**
     * @var \Production\ProductionBundle\Entity\BackSizes
     */
    private $backSize;

    /**
     * @var \Production\ProductionBundle\Entity\ProdPrices
     */
    private $prodPrice;

    /**
     * @var \Production\ProductionBundle\Entity\BackUsersOld
     */
    private $backUser;

    /**
     * Constructor
     */
    public function __construct() {
        $this->createdAt = $this->updatedAt = new \DateTime("now");
    }

    /**
     * Set price
     *
     * @param float $price
     * @return ProdPricesDetail
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProdPricesDetail
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
     * @return ProdPricesDetail
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
     * Set backGroupsColor
     *
     * @param \Production\ProductionBundle\Entity\BackGroupsColors $backGroupsColor
     * @return ProdPricesDetail
     */
    public function setBackGroupsColor(\Production\ProductionBundle\Entity\BackGroupsColors $backGroupsColor = null) {
        $this->backGroupsColor = $backGroupsColor;

        return $this;
    }

    /**
     * Get backGroupsColor
     *
     * @return \Production\ProductionBundle\Entity\BackGroupsColors 
     */
    public function getBackGroupsColor() {
        return $this->backGroupsColor;
    }

    /**
     * Set backModel
     *
     * @param \Production\ProductionBundle\Entity\BackModels $backModel
     * @return ProdPricesDetail
     */
    public function setBackModel(\Production\ProductionBundle\Entity\BackModels $backModel = null) {
        $this->backModel = $backModel;

        return $this;
    }

    /**
     * Get backModel
     *
     * @return \Production\ProductionBundle\Entity\BackModels 
     */
    public function getBackModel() {
        return $this->backModel;
    }

    /**
     * Set backSize
     *
     * @param \Production\ProductionBundle\Entity\BackSizes $backSize
     * @return ProdPricesDetail
     */
    public function setBackSize(\Production\ProductionBundle\Entity\BackSizes $backSize = null) {
        $this->backSize = $backSize;

        return $this;
    }

    /**
     * Get backSize
     *
     * @return \Production\ProductionBundle\Entity\BackSizes 
     */
    public function getBackSize() {
        return $this->backSize;
    }

    /**
     * Set prodPrice
     *
     * @param \Production\ProductionBundle\Entity\ProdPrices $prodPrice
     * @return ProdPricesDetail
     */
    public function setProdPrice(\Production\ProductionBundle\Entity\ProdPrices $prodPrice = null) {
        $this->prodPrice = $prodPrice;

        return $this;
    }

    /**
     * Get prodPrice
     *
     * @return \Production\ProductionBundle\Entity\ProdPrices 
     */
    public function getProdPrice() {
        return $this->prodPrice;
    }

    /**
     * Set backUser
     *
     * @param \Production\ProductionBundle\Entity\BackUsersOld $backUser
     * @return ProdPricesDetail
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
     * @var integer
     */
    private $prod_price_id;

    /**
     * @var integer
     */
    private $back_groups_color_id;

    /**
     * @var integer
     */
    private $back_model_id;

    /**
     * @var integer
     */
    private $back_size_id;

    /**
     * Set prod_price_id
     *
     * @param integer $prodPriceId
     * @return ProdPricesDetail
     */
    public function setProdPriceId($prodPriceId) {
        $this->prod_price_id = $prodPriceId;

        return $this;
    }

    /**
     * Get prod_price_id
     *
     * @return integer 
     */
    public function getProdPriceId() {
        return $this->prod_price_id;
    }

    /**
     * Set back_groups_color_id
     *
     * @param integer $backGroupsColorId
     * @return ProdPricesDetail
     */
    public function setBackGroupsColorId($backGroupsColorId) {
        $this->back_groups_color_id = $backGroupsColorId;

        return $this;
    }

    /**
     * Get back_groups_color_id
     *
     * @return integer 
     */
    public function getBackGroupsColorId() {
        return $this->back_groups_color_id;
    }

    /**
     * Set back_model_id
     *
     * @param integer $backModelId
     * @return ProdPricesDetail
     */
    public function setBackModelId($backModelId) {
        $this->back_model_id = $backModelId;

        return $this;
    }

    /**
     * Get back_model_id
     *
     * @return integer 
     */
    public function getBackModelId() {
        return $this->back_model_id;
    }

    /**
     * Set back_size_id
     *
     * @param integer $backSizeId
     * @return ProdPricesDetail
     */
    public function setBackSizeId($backSizeId) {
        $this->back_size_id = $backSizeId;

        return $this;
    }

    /**
     * Get back_size_id
     *
     * @return integer 
     */
    public function getBackSizeId() {
        return $this->back_size_id;
    }

}
