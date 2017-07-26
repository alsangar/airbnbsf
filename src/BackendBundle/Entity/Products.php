<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ProductsRepository")
 * 
 * @UniqueEntity("name")
 */
class Products
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
     * @var string
     * 
     * @Assert\Length(
     *      min = "10",
     *      max = "255",
     * )
     * @Assert\NotBlank()
     * @Assert\NotNull()
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     */
    private $name;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="description", type="text", nullable=true)
     */    
    private $description;
    
    /**
     * @var string
     * @Assert\Length(
     *      min = "1",
     *      max = "255",
     * ) 
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */    
    private $reference;
    
    /**
     * @var decimal
     * 
     * @ORM\Column(name="room_price", type="decimal", scale=2)
     */
    private $room_price;
    
    /**
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * 
    * @ORM\Column(name="wc_independents", type="integer", length=2, nullable=true)
    */
    private $wc_independents;
    
    /**
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * 
    * @ORM\Column(name="wc_shared", type="integer", length=2, nullable=true)
    */
    private $wc_shared;
    
    /**
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * 
    * @ORM\Column(name="bedrooms", type="integer", length=2, nullable=true)
    */
    private $bedrooms;
    
    /**
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * 
    * @ORM\Column(name="beds", type="integer", length=2, nullable=true)
    */
    private $beds;
    
    /**
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * 
    * @Assert\NotBlank()
    * @Assert\NotNull()
    *
    * @ORM\Column(name="capacity", type="integer", length=2, nullable=true)
    */
    private $capacity;

    /**
    * @var \DateTime
    *
    * @Assert\NotNull()
    * @ORM\Column(name="regDate", type="datetime", nullable=false)
    */
    private $regDate;


    /**
    * @var boolean
    *
    * @ORM\Column(name="published", type="boolean", nullable=true)
    */
    private $published;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="approved", type="boolean", nullable=true)
    */
    private $approved;    
    
    /**
     * @var string
     * @Assert\Length(
     *      min = "1",
     *      max = "255",
     * ) 
     * @ORM\Column(name="person_auto", type="string", length=255, nullable=true)
     */    
    private $person_auto;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="signed", type="boolean", nullable=true)
    */
    private $signed; 
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="high_standing", type="boolean", nullable=true)
    */
    private $high_standing;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="featured", type="boolean", nullable=true)
    */
    private $featured;
    
    /**
    * @var \DateTime
    *
    * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
    */
    private $deletedAt;
    
    /**
     * @var decimal
     * 
     * @ORM\Column(name="room_price_out_season", type="decimal", scale=2)
     */
    private $room_price_out_season;
    
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="products", cascade={"persist"})
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;
    
    /**
    * @ORM\OneToMany(targetEntity="Favorites", mappedBy="products", cascade={"persist"})
    */
    protected $favorites;
    
    /**
    * @ORM\OneToMany(targetEntity="Complaints", mappedBy="products", cascade={"persist"})
    */
    protected $complaints;

    /**
    * @ORM\ManyToOne(targetEntity="Categories", inversedBy="products", cascade={"persist"})
    * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
    */
    protected $categories;

    /**
    * Constructor
    */
    public function __construct()
    {
       $this->user = new \Doctrine\Common\Collections\ArrayCollection();
       $this->favorites = new \Doctrine\Common\Collections\ArrayCollection();
       $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
       $this->complaints = new \Doctrine\Common\Collections\ArrayCollection();
       
       $this->regDate = new \DateTime();
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
     * Set name
     *
     * @param string $name
     * @return Products
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
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Products
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
     * Add favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     * @return Products
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
     * Set capacity
     *
     * @param integer $capacity
     * @return Products
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    
        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set regDate
     *
     * @param \DateTime $regDate
     * @return Products
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;
    
        return $this;
    }

    /**
     * Get regDate
     *
     * @return \DateTime 
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Products
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return Products
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    
        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Products
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
     * Set reference
     *
     * @param string $reference
     * @return Products
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set room_price
     *
     * @param string $roomPrice
     * @return Products
     */
    public function setRoomPrice($roomPrice)
    {
        $this->room_price = $roomPrice;
    
        return $this;
    }

    /**
     * Get room_price
     *
     * @return string 
     */
    public function getRoomPrice()
    {
        return $this->room_price;
    }

    /**
     * Set wc_independents
     *
     * @param integer $wcIndependents
     * @return Products
     */
    public function setWcIndependents($wcIndependents)
    {
        $this->wc_independents = $wcIndependents;
    
        return $this;
    }

    /**
     * Get wc_independents
     *
     * @return integer 
     */
    public function getWcIndependents()
    {
        return $this->wc_independents;
    }

    /**
     * Set wc_shared
     *
     * @param integer $wcShared
     * @return Products
     */
    public function setWcShared($wcShared)
    {
        $this->wc_shared = $wcShared;
    
        return $this;
    }

    /**
     * Get wc_shared
     *
     * @return integer 
     */
    public function getWcShared()
    {
        return $this->wc_shared;
    }

    /**
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return Products
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    
        return $this;
    }

    /**
     * Get bedrooms
     *
     * @return integer 
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * Set beds
     *
     * @param integer $beds
     * @return Products
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
    
        return $this;
    }

    /**
     * Get beds
     *
     * @return integer 
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Set person_auto
     *
     * @param string $personAuto
     * @return Products
     */
    public function setPersonAuto($personAuto)
    {
        $this->person_auto = $personAuto;
    
        return $this;
    }

    /**
     * Get person_auto
     *
     * @return string 
     */
    public function getPersonAuto()
    {
        return $this->person_auto;
    }

    /**
     * Set signed
     *
     * @param boolean $signed
     * @return Products
     */
    public function setSigned($signed)
    {
        $this->signed = $signed;
    
        return $this;
    }

    /**
     * Get signed
     *
     * @return boolean 
     */
    public function getSigned()
    {
        return $this->signed;
    }

    /**
     * Set high_standing
     *
     * @param boolean $highStanding
     * @return Products
     */
    public function setHighStanding($highStanding)
    {
        $this->high_standing = $highStanding;
    
        return $this;
    }

    /**
     * Get high_standing
     *
     * @return boolean 
     */
    public function getHighStanding()
    {
        return $this->high_standing;
    }

    /**
     * Set featured
     *
     * @param boolean $featured
     * @return Products
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    
        return $this;
    }

    /**
     * Get featured
     *
     * @return boolean 
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Products
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    
        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set room_price_out_season
     *
     * @param string $roomPriceOutSeason
     * @return Products
     */
    public function setRoomPriceOutSeason($roomPriceOutSeason)
    {
        $this->room_price_out_season = $roomPriceOutSeason;
    
        return $this;
    }

    /**
     * Get room_price_out_season
     *
     * @return string 
     */
    public function getRoomPriceOutSeason()
    {
        return $this->room_price_out_season;
    }

    /**
     * Set categories
     *
     * @param \BackendBundle\Entity\Categories $categories
     * @return Products
     */
    public function setCategories(\BackendBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return \BackendBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add complaints
     *
     * @param \BackendBundle\Entity\Complaints $complaints
     * @return Products
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
