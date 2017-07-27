<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class Messages
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
     * @ORM\Column(name="message", type="blob", nullable=false)
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userFrom_id", referencedColumnName="id")
     * })
     */
    private $userfrom;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userTo_id", referencedColumnName="id")
     * })
     */
    private $userto;



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
     * Set message
     *
     * @param string $message
     * @return Messages
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
     * @return Messages
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
     * @return Messages
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
     * Set userfrom
     *
     * @param \BackendBundle\Entity\User $userfrom
     * @return Messages
     */
    public function setUserfrom(\BackendBundle\Entity\User $userfrom = null)
    {
        $this->userfrom = $userfrom;

        return $this;
    }

    /**
     * Get userfrom
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUserfrom()
    {
        return $this->userfrom;
    }

    /**
     * Set userto
     *
     * @param \BackendBundle\Entity\User $userto
     * @return Messages
     */
    public function setUserto(\BackendBundle\Entity\User $userto = null)
    {
        $this->userto = $userto;

        return $this;
    }

    /**
     * Get userto
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUserto()
    {
        return $this->userto;
    }
}
