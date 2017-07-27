<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 *
 * @ORM\Table(name="availability")
 * @ORM\Entity
 */
class Availability
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="datetime", nullable=false)
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="datetime", nullable=false)
     */
    private $dateTo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_booked", type="boolean", nullable=false)
     */
    private $isBooked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_busy", type="boolean", nullable=false)
     */
    private $isBusy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=false)
     */
    private $dateadd;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;



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
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return Availability
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return Availability
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set isBooked
     *
     * @param boolean $isBooked
     * @return Availability
     */
    public function setIsBooked($isBooked)
    {
        $this->isBooked = $isBooked;

        return $this;
    }

    /**
     * Get isBooked
     *
     * @return boolean 
     */
    public function getIsBooked()
    {
        return $this->isBooked;
    }

    /**
     * Set isBusy
     *
     * @param boolean $isBusy
     * @return Availability
     */
    public function setIsBusy($isBusy)
    {
        $this->isBusy = $isBusy;

        return $this;
    }

    /**
     * Get isBusy
     *
     * @return boolean 
     */
    public function getIsBusy()
    {
        return $this->isBusy;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Availability
     */
    public function setDateadd($dateadd)
    {
        $this->dateadd = $dateadd;

        return $this;
    }

    /**
     * Get dateadd
     *
     * @return \DateTime 
     */
    public function getDateadd()
    {
        return $this->dateadd;
    }

    /**
     * Set product
     *
     * @param \BackendBundle\Entity\Products $product
     * @return Availability
     */
    public function setProduct(\BackendBundle\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \BackendBundle\Entity\Products 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
