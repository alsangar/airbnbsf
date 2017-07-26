<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\CategoriesRepository")
 */
class Categories
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
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * 
    * @ORM\Column(name="parent_id", type="integer", length=2, nullable=true)
    */
    private $parent_id; 
    
    /**
     * @var string
     * @Assert\Length(
     *      min = "1",
     *      max = "255",
     * ) 
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */    
    private $name;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="active", type="boolean", nullable=true)
    */
    private $active;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Products", mappedBy="categories", cascade={"persist"})
    */
    protected $products;
    
    /**
    * Constructor
    */
    public function __construct()
    {
       $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set parent_id
     *
     * @param integer $parentId
     * @return Categories
     */
    public function setParentId($parentId)
    {
        $this->parent_id = $parentId;
    
        return $this;
    }

    /**
     * Get parent_id
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Categories
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
     * Set active
     *
     * @param boolean $active
     * @return Categories
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
     * Add products
     *
     * @param \BackendBundle\Entity\Products $products
     * @return Categories
     */
    public function addProduct(\BackendBundle\Entity\Products $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove products
     *
     * @param \BackendBundle\Entity\Products $products
     */
    public function removeProduct(\BackendBundle\Entity\Products $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
}
