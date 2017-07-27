<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ProductsRepository")
 */
class Products
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="room_price", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $roomPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="wc_independents", type="integer", nullable=true)
     */
    private $wcIndependents;

    /**
     * @var integer
     *
     * @ORM\Column(name="wc_shared", type="integer", nullable=true)
     */
    private $wcShared;

    /**
     * @var integer
     *
     * @ORM\Column(name="bedrooms", type="integer", nullable=true)
     */
    private $bedrooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="beds", type="integer", nullable=true)
     */
    private $beds;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacity", type="integer", nullable=true)
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="person_auto", type="string", length=255, nullable=false)
     */
    private $personAuto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="signed", type="boolean", nullable=false)
     */
    private $signed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="high_standing", type="boolean", nullable=true)
     */
    private $highStanding;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=false)
     */
    private $approved;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="featured", type="boolean", nullable=false)
     */
    private $featured;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedat;

    /**
     * @var string
     *
     * @ORM\Column(name="room_price_out_season", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $roomPriceOutSeason;

    /**
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

//    /**
//     * @var \MediaGallery
//     *
//     * @ORM\ManyToOne(targetEntity="MediaGallery")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="gallery_id", referencedColumnName="id")
//     * })
//     */
//    private $gallery;

    /**
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     * })
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity="ProductType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productType_id", referencedColumnName="id")
     * })
     */
    private $producttype;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="RoomType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roomType_id", referencedColumnName="id")
     * })
     */
    private $roomtype;

    /**
    *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Gallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gallery_id", referencedColumnName="id")
     * })
     */
    private $gallery;

    /**
     * @ORM\OneToMany(targetEntity="ProductDescription", mappedBy="product", cascade={"persist"})
     */
    protected $langDescription;

    /**
     * @ORM\OneToMany(targetEntity="ProductServices", mappedBy="product", cascade={"persist"})
     */
    protected $service;

    /**
     * @ORM\OneToMany(targetEntity="ProductFeatures", mappedBy="product", cascade={"persist"})
     */
    protected $feature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->langDescription = new \Doctrine\Common\Collections\ArrayCollection();
        $this->service = new \Doctrine\Common\Collections\ArrayCollection();
        $this->feature = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Products
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
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
     * Set roomPrice
     *
     * @param string $roomPrice
     * @return Products
     */
    public function setRoomPrice($roomPrice)
    {
        $this->roomPrice = $roomPrice;

        return $this;
    }

    /**
     * Get roomPrice
     *
     * @return string 
     */
    public function getRoomPrice()
    {
        return $this->roomPrice;
    }

    /**
     * Set wcIndependents
     *
     * @param integer $wcIndependents
     * @return Products
     */
    public function setWcIndependents($wcIndependents)
    {
        $this->wcIndependents = $wcIndependents;

        return $this;
    }

    /**
     * Get wcIndependents
     *
     * @return integer 
     */
    public function getWcIndependents()
    {
        return $this->wcIndependents;
    }

    /**
     * Set wcShared
     *
     * @param integer $wcShared
     * @return Products
     */
    public function setWcShared($wcShared)
    {
        $this->wcShared = $wcShared;

        return $this;
    }

    /**
     * Get wcShared
     *
     * @return integer 
     */
    public function getWcShared()
    {
        return $this->wcShared;
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
     * Set personAuto
     *
     * @param string $personAuto
     * @return Products
     */
    public function setPersonAuto($personAuto)
    {
        $this->personAuto = $personAuto;

        return $this;
    }

    /**
     * Get personAuto
     *
     * @return string 
     */
    public function getPersonAuto()
    {
        return $this->personAuto;
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
     * Set highStanding
     *
     * @param boolean $highStanding
     * @return Products
     */
    public function setHighStanding($highStanding)
    {
        $this->highStanding = $highStanding;

        return $this;
    }

    /**
     * Get highStanding
     *
     * @return boolean 
     */
    public function getHighStanding()
    {
        return $this->highStanding;
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
     * Set deletedat
     *
     * @param \DateTime $deletedat
     * @return Products
     */
    public function setDeletedat($deletedat)
    {
        $this->deletedat = $deletedat;

        return $this;
    }

    /**
     * Get deletedat
     *
     * @return \DateTime 
     */
    public function getDeletedat()
    {
        return $this->deletedat;
    }

    /**
     * Set roomPriceOutSeason
     *
     * @param string $roomPriceOutSeason
     * @return Products
     */
    public function setRoomPriceOutSeason($roomPriceOutSeason)
    {
        $this->roomPriceOutSeason = $roomPriceOutSeason;

        return $this;
    }

    /**
     * Get roomPriceOutSeason
     *
     * @return string 
     */
    public function getRoomPriceOutSeason()
    {
        return $this->roomPriceOutSeason;
    }

    /**
     * Set category
     *
     * @param \BackendBundle\Entity\Categories $category
     * @return Products
     */
    public function setCategory(\BackendBundle\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \BackendBundle\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set location
     *
     * @param \BackendBundle\Entity\Location $location
     * @return Products
     */
    public function setLocation(\BackendBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \BackendBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set producttype
     *
     * @param \BackendBundle\Entity\ProductType $producttype
     * @return Products
     */
    public function setProducttype(\BackendBundle\Entity\ProductType $producttype = null)
    {
        $this->producttype = $producttype;

        return $this;
    }

    /**
     * Get producttype
     *
     * @return \BackendBundle\Entity\ProductType 
     */
    public function getProducttype()
    {
        return $this->producttype;
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
     * Set roomtype
     *
     * @param \BackendBundle\Entity\RoomType $roomtype
     * @return Products
     */
    public function setRoomtype(\BackendBundle\Entity\RoomType $roomtype = null)
    {
        $this->roomtype = $roomtype;

        return $this;
    }

    /**
     * Get roomtype
     *
     * @return \BackendBundle\Entity\RoomType 
     */
    public function getRoomtype()
    {
        return $this->roomtype;
    }

    /**
     * Add langDescription
     *
     * @param \BackendBundle\Entity\ProductDescription $langDescription
     *
     * @return Products
     */
    public function addLangDescription(\BackendBundle\Entity\ProductDescription $langDescription)
    {
        $this->langDescription[] = $langDescription;

        return $this;
    }

    /**
     * Remove langDescription
     *
     * @param \BackendBundle\Entity\ProductDescription $langDescription
     */
    public function removeLangDescription(\BackendBundle\Entity\ProductDescription $langDescription)
    {
        $this->langDescription->removeElement($langDescription);
    }

    /**
     * Get langDescription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLangDescription()
    {
        return $this->langDescription;
    }

    /**
     * Set gallery
     *
     * @param \Application\Sonata\MediaBundle\Entity\Gallery $gallery
     *
     * @return Products
     */
    public function setGallery(\Application\Sonata\MediaBundle\Entity\Gallery $gallery = null)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return \Application\Sonata\MediaBundle\Entity\Gallery
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * Add service
     *
     * @param \BackendBundle\Entity\ProductServices $service
     *
     * @return Products
     */
    public function addService(\BackendBundle\Entity\ProductServices $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \BackendBundle\Entity\ProductServices $service
     */
    public function removeService(\BackendBundle\Entity\ProductServices $service)
    {
        $this->service->removeElement($service);
    }

    /**
     * Get service
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Add feature
     *
     * @param \BackendBundle\Entity\ProductFeatures $feature
     *
     * @return Products
     */
    public function addFeature(\BackendBundle\Entity\ProductFeatures $feature)
    {
        $this->feature[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \BackendBundle\Entity\ProductFeatures $feature
     */
    public function removeFeature(\BackendBundle\Entity\ProductFeatures $feature)
    {
        $this->feature->removeElement($feature);
    }

    /**
     * Get feature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeature()
    {
        return $this->feature;
    }
}
