<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coupons
 *
 * @ORM\Table(name="coupons")
 * @ORM\Entity
 */
class Coupons
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
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_percentage", type="boolean", nullable=false)
     */
    private $isPercentage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_fixed", type="boolean", nullable=false)
     */
    private $isFixed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=false)
     */
    private $dateadd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateused", type="datetime", nullable=true)
     */
    private $dateused;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_from", type="datetime", nullable=true)
     */
    private $validFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_to", type="datetime", nullable=false)
     */
    private $validTo;

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
     * Set amount
     *
     * @param integer $amount
     * @return Coupons
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set isPercentage
     *
     * @param boolean $isPercentage
     * @return Coupons
     */
    public function setIsPercentage($isPercentage)
    {
        $this->isPercentage = $isPercentage;

        return $this;
    }

    /**
     * Get isPercentage
     *
     * @return boolean 
     */
    public function getIsPercentage()
    {
        return $this->isPercentage;
    }

    /**
     * Set isFixed
     *
     * @param boolean $isFixed
     * @return Coupons
     */
    public function setIsFixed($isFixed)
    {
        $this->isFixed = $isFixed;

        return $this;
    }

    /**
     * Get isFixed
     *
     * @return boolean 
     */
    public function getIsFixed()
    {
        return $this->isFixed;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Coupons
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
     * Set dateused
     *
     * @param \DateTime $dateused
     * @return Coupons
     */
    public function setDateused($dateused)
    {
        $this->dateused = $dateused;

        return $this;
    }

    /**
     * Get dateused
     *
     * @return \DateTime 
     */
    public function getDateused()
    {
        return $this->dateused;
    }

    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     * @return Coupons
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime 
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validTo
     *
     * @param \DateTime $validTo
     * @return Coupons
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * Get validTo
     *
     * @return \DateTime 
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Coupons
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
