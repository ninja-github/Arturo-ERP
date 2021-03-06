<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackModelsHasBackSizes
 */
class BackModelsHasBackSizes
{
    /**
     * @var integer
     */
    private $backModelsHasBackSizesId;

    /**
     * @var \Production\ProductionBundle\Entity\BackSizes
     */
    private $backSizes;

    /**
     * @var \Production\ProductionBundle\Entity\BackModels
     */
    private $backModels;


    /**
     * Get backModelsHasBackSizesId
     *
     * @return integer 
     */
    public function getBackModelsHasBackSizesId()
    {
        return $this->backModelsHasBackSizesId;
    }

    /**
     * Set backSizes
     *
     * @param \Production\ProductionBundle\Entity\BackSizes $backSizes
     * @return BackModelsHasBackSizes
     */
    public function setBackSizes(\Production\ProductionBundle\Entity\BackSizes $backSizes = null)
    {
        $this->backSizes = $backSizes;

        return $this;
    }

    /**
     * Get backSizes
     *
     * @return \Production\ProductionBundle\Entity\BackSizes 
     */
    public function getBackSizes()
    {
        return $this->backSizes;
    }

    /**
     * Set backModels
     *
     * @param \Production\ProductionBundle\Entity\BackModels $backModels
     * @return BackModelsHasBackSizes
     */
    public function setBackModels(\Production\ProductionBundle\Entity\BackModels $backModels = null)
    {
        $this->backModels = $backModels;

        return $this;
    }

    /**
     * Get backModels
     *
     * @return \Production\ProductionBundle\Entity\BackModels 
     */
    public function getBackModels()
    {
        return $this->backModels;
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
