<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Complaints
 *
 * @ORM\Table(name="complaints")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ComplaintsRepository")
 */
class Complaints
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
    * @var \DateTime
    *
    * @Assert\NotNull()
    * @ORM\Column(name="dateAdd", type="datetime", nullable=false)
    */
    private $dateAdd;

     /**
    * @var \DateTime
    *
    * @ORM\Column(name="dateViewed", type="datetime", nullable=true)
    */
    private $dateViewed;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="active", type="boolean", nullable=true)
    */
    private $active;
    
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="complaints", cascade={"persist"})
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;

    /**
    * @ORM\ManyToOne(targetEntity="Products", inversedBy="complaints", cascade={"persist"})
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    protected $products;
    
    
    /**
    * Constructor
    */
    public function __construct()
    {
       //$this->device = new \Doctrine\Common\Collections\ArrayCollection();

       $this->dateAdd = new \DateTime();
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return Complaints
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    
        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateViewed
     *
     * @param \DateTime $dateViewed
     * @return Complaints
     */
    public function setDateViewed($dateViewed)
    {
        $this->dateViewed = $dateViewed;
    
        return $this;
    }

    /**
     * Get dateViewed
     *
     * @return \DateTime 
     */
    public function getDateViewed()
    {
        return $this->dateViewed;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Complaints
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Complaints
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

    /**
     * Set products
     *
     * @param \BackendBundle\Entity\Products $products
     * @return Complaints
     */
    public function setProducts(\BackendBundle\Entity\Products $products = null)
    {
        $this->products = $products;
    
        return $this;
    }

    /**
     * Get products
     *
     * @return \BackendBundle\Entity\Products 
     */
    public function getProducts()
    {
        return $this->products;
    }
}
