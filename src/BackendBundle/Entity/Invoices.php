<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table(name="invoices")
 * @ORM\Entity
 */
class Invoices
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscalId", type="string", length=40, nullable=true)
     */
    private $fiscalid;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotal", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $subtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_type", type="string", length=40, nullable=false)
     */
    private $vatType;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="retention_type", type="string", length=40, nullable=false)
     */
    private $retentionType;

    /**
     * @var string
     *
     * @ORM\Column(name="retention_vat", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $retentionVat;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=false)
     */
    private $dateadd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateviewed", type="datetime", nullable=true)
     */
    private $dateviewed;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set name
     *
     * @param string $name
     * @return Invoices
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Invoices
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Invoices
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Invoices
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Invoices
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set fiscalid
     *
     * @param string $fiscalid
     * @return Invoices
     */
    public function setFiscalid($fiscalid)
    {
        $this->fiscalid = $fiscalid;

        return $this;
    }

    /**
     * Get fiscalid
     *
     * @return string 
     */
    public function getFiscalid()
    {
        return $this->fiscalid;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     * @return Invoices
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return string 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set vatType
     *
     * @param string $vatType
     * @return Invoices
     */
    public function setVatType($vatType)
    {
        $this->vatType = $vatType;

        return $this;
    }

    /**
     * Get vatType
     *
     * @return string 
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return Invoices
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set retentionType
     *
     * @param string $retentionType
     * @return Invoices
     */
    public function setRetentionType($retentionType)
    {
        $this->retentionType = $retentionType;

        return $this;
    }

    /**
     * Get retentionType
     *
     * @return string 
     */
    public function getRetentionType()
    {
        return $this->retentionType;
    }

    /**
     * Set retentionVat
     *
     * @param string $retentionVat
     * @return Invoices
     */
    public function setRetentionVat($retentionVat)
    {
        $this->retentionVat = $retentionVat;

        return $this;
    }

    /**
     * Get retentionVat
     *
     * @return string 
     */
    public function getRetentionVat()
    {
        return $this->retentionVat;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Invoices
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Invoices
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
     * Set dateviewed
     *
     * @param \DateTime $dateviewed
     * @return Invoices
     */
    public function setDateviewed($dateviewed)
    {
        $this->dateviewed = $dateviewed;

        return $this;
    }

    /**
     * Get dateviewed
     *
     * @return \DateTime 
     */
    public function getDateviewed()
    {
        return $this->dateviewed;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Invoices
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
