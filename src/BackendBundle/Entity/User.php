<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\UserRepository")
 */
class User
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
    * @ORM\OneToMany(targetEntity="Products", mappedBy="user", cascade={"persist"})
    */
    protected $products;
    
    /**
    * @ORM\OneToMany(targetEntity="Favorites", mappedBy="user", cascade={"persist"})
    */
    protected $favorites;
    
    /**
    * @ORM\OneToMany(targetEntity="Complaints", mappedBy="user", cascade={"persist"})
    */
    protected $complaints;

    /**
    * Constructor
    */
    public function __construct()
    {
       $this->products = new \Doctrine\Common\Collections\ArrayCollection();
       $this->favorites = new \Doctrine\Common\Collections\ArrayCollection();
       $this->complaints = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add products
     *
     * @param \BackendBundle\Entity\Products $products
     * @return User
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

    /**
     * Add favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     * @return User
     */
    public function addFavorite(\BackendBundle\Entity\Favorites $favorites)
    {
        $this->favorites[] = $favorites;
    
        return $this;
    }

    /**
     * Remove favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     */
    public function removeFavorite(\BackendBundle\Entity\Favorites $favorites)
    {
        $this->favorites->removeElement($favorites);
    }

    /**
     * Get favorites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Add complaints
     *
     * @param \BackendBundle\Entity\Complaints $complaints
     * @return User
     */
    public function addComplaint(\BackendBundle\Entity\Complaints $complaints)
    {
        $this->complaints[] = $complaints;
    
        return $this;
    }

    /**
     * Remove complaints
     *
     * @param \BackendBundle\Entity\Complaints $complaints
     */
    public function removeComplaint(\BackendBundle\Entity\Complaints $complaints)
    {
        $this->complaints->removeElement($complaints);
    }

    /**
     * Get complaints
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComplaints()
    {
        return $this->complaints;
    }
}
