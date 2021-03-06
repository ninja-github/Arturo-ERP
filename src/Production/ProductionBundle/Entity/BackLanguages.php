<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BackLanguages
 */
class BackLanguages {

    /**
     * @var boolean
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $image;

    /**
     * @var boolean
     */
    private $sort;

    /**
     * @var boolean
     */
    private $active;

    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return BackLanguages
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return BackLanguages
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return BackLanguages
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set sort
     *
     * @param boolean $sort
     * @return BackLanguages
     */
    public function setSort($sort) {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return boolean 
     */
    public function getSort() {
        return $this->sort;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return BackLanguages
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * 
     * @return type
     */
    public function __toString() {
        return $this->name;
    }

}
