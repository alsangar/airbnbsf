<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity
 */
class Contacts
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
     * @var integer
     *
     * @ORM\Column(name="user_from", type="integer", nullable=true)
     */
    private $userFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="name_from", type="string", length=255, nullable=false)
     */
    private $nameFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="email_from", type="string", length=255, nullable=false)
     */
    private $emailFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_from", type="string", length=100, nullable=true)
     */
    private $phoneFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="blob", nullable=true)
     */
    private $message;

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
     * Set userFrom
     *
     * @param integer $userFrom
     * @return Contacts
     */
    public function setUserFrom($userFrom)
    {
        $this->userFrom = $userFrom;

        return $this;
    }

    /**
     * Get userFrom
     *
     * @return integer 
     */
    public function getUserFrom()
    {
        return $this->userFrom;
    }

    /**
     * Set nameFrom
     *
     * @param string $nameFrom
     * @return Contacts
     */
    public function setNameFrom($nameFrom)
    {
        $this->nameFrom = $nameFrom;

        return $this;
    }

    /**
     * Get nameFrom
     *
     * @return string 
     */
    public function getNameFrom()
    {
        return $this->nameFrom;
    }

    /**
     * Set emailFrom
     *
     * @param string $emailFrom
     * @return Contacts
     */
    public function setEmailFrom($emailFrom)
    {
        $this->emailFrom = $emailFrom;

        return $this;
    }

    /**
     * Get emailFrom
     *
     * @return string 
     */
    public function getEmailFrom()
    {
        return $this->emailFrom;
    }

    /**
     * Set phoneFrom
     *
     * @param string $phoneFrom
     * @return Contacts
     */
    public function setPhoneFrom($phoneFrom)
    {
        $this->phoneFrom = $phoneFrom;

        return $this;
    }

    /**
     * Get phoneFrom
     *
     * @return string 
     */
    public function getPhoneFrom()
    {
        return $this->phoneFrom;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Contacts
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Contacts
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
     * @return Contacts
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
     * Set product
     *
     * @param \BackendBundle\Entity\Products $product
     * @return Contacts
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
