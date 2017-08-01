<?php
// src/AppBundle/Entity/Purchase.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="purchases_detail")
 */
class PurchaseDetail
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="user_id", type="string", length=255, nullable=true) */
    protected $user_id;
    
    /** @ORM\Column(name="title", type="string", length=255, nullable=true) */
    protected $title;
    
    /** @ORM\Column(name="description", type="string", length=255, nullable=true) */
    protected $description;
    
    /** @ORM\Column(name="value", type="integer", length=255, nullable=true) */
    protected $value;
    
    /** @ORM\Column(name="image", type="string", length=255, nullable=true) */
    protected $image;
    
    /** @ORM\Column(name="size", type="string", length=255, nullable=true) */
    protected $size;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $status;
    
    /**
     * @ORM\ManyToOne(targetEntity="Purchase", inversedBy="purchase")
     * @ORM\JoinColumn(name="purchases_details", referencedColumnName="id", nullable=TRUE)
     **/
    protected $purchase_detail;

    

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
     * Set userId
     *
     * @param string $userId
     *
     * @return PurchaseDetail
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return PurchaseDetail
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PurchaseDetail
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return PurchaseDetail
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return PurchaseDetail
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return PurchaseDetail
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return PurchaseDetail
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set purchaseDetail
     *
     * @param \AppBundle\Entity\Purchase $purchaseDetail
     *
     * @return PurchaseDetail
     */
    public function setPurchaseDetail(\AppBundle\Entity\Purchase $purchaseDetail = null)
    {
        $this->purchase_detail = $purchaseDetail;

        return $this;
    }

    /**
     * Get purchaseDetail
     *
     * @return \AppBundle\Entity\Purchase
     */
    public function getPurchaseDetail()
    {
        return $this->purchase_detail;
    }
}