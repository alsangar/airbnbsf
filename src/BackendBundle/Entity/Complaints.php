<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Complaints
 *
 * @ORM\Table(name="complaints")
 * @ORM\Entity
 */
class Complaints
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
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

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
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Complaints
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
     * @return Complaints
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
     * Set userfrom
     *
     * @param \BackendBundle\Entity\User $userfrom
     * @return Complaints
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
     * Set product
     *
     * @param \BackendBundle\Entity\Products $product
     * @return Complaints
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
