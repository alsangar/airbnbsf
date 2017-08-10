<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Properties
 *
 * @ORM\Table(name="properties")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\PropertiesRepository")
 */
class Properties
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
     * @ORM\Column(name="reference", type="string", length=100, nullable=true)
     */
    private $reference;

    /**
     * @var boolean
     *
     * @ORM\Column(name="guestHouse", type="boolean", nullable=true)
     */
    private $guesthouse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="independentApartment", type="boolean", nullable=true)
     */
    private $independentapartment;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberRooms", type="integer", nullable=true)
     */
    private $numberrooms;

    /**
     * @var float
     *
     * @ORM\Column(name="roomPrice", type="float", precision=5, scale=2, nullable=true)
     */
    private $roomprice;

    /**
     * @var float
     *
     * @ORM\Column(name="roomPriceOutSeason", type="float", precision=5, scale=2, nullable=true)
     */
    private $roompriceoutseason;

    /**
     * @var integer
     *
     * @ORM\Column(name="wcIndependents", type="integer", nullable=true)
     */
    private $wcindependents;

    /**
     * @var integer
     *
     * @ORM\Column(name="wcShared", type="integer", nullable=true)
     */
    private $wcshared;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="addressPrivate", type="string", length=100, nullable=true)
     */
    private $addressprivate;

    /**
     * @var string
     *
     * @ORM\Column(name="entreCalleUno", type="string", length=150, nullable=true)
     */
    private $entrecalleuno;

    /**
     * @var string
     *
     * @ORM\Column(name="entreCalleDos", type="string", length=150, nullable=true)
     */
    private $entrecalledos;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio", type="string", length=100, nullable=true)
     */
    private $barrio;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=15, nullable=true)
     */
    private $zipcode;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=21, scale=18, nullable=true)
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lon", type="float", precision=21, scale=18, nullable=true)
     */
    private $lon;

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
     * @ORM\Column(name="bathrooms", type="integer", nullable=true)
     */
    private $bathrooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacity", type="integer", nullable=true)
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="personAuto", type="string", length=200, nullable=true)
     */
    private $personauto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAuto", type="datetime", nullable=true)
     */
    private $dateauto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="signed", type="boolean", nullable=true)
     */
    private $signed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=true)
     */
    private $dateadd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plublished", type="boolean", nullable=true)
     */
    private $plublished;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_visits", type="integer", nullable=true)
     */
    private $numberVisits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="featured", type="boolean", nullable=true)
     */
    private $featured;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

//    /**
//     * @ORM\ManyToOne(targetEntity="PropertyTypes")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="property_type_id", referencedColumnName="id")
//     * })
//     */
//    private $propertyType;

    /**
     * @ORM\ManyToOne(targetEntity="RoomType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_type_id", referencedColumnName="id")
     * })
     */
    private $roomType;

    /**
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
     * Set reference
     *
     * @param string $reference
     * @return Properties
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
     * Set guesthouse
     *
     * @param boolean $guesthouse
     * @return Properties
     */
    public function setGuesthouse($guesthouse)
    {
        $this->guesthouse = $guesthouse;

        return $this;
    }

    /**
     * Get guesthouse
     *
     * @return boolean 
     */
    public function getGuesthouse()
    {
        return $this->guesthouse;
    }

    /**
     * Set independentapartment
     *
     * @param boolean $independentapartment
     * @return Properties
     */
    public function setIndependentapartment($independentapartment)
    {
        $this->independentapartment = $independentapartment;

        return $this;
    }

    /**
     * Get independentapartment
     *
     * @return boolean 
     */
    public function getIndependentapartment()
    {
        return $this->independentapartment;
    }

    /**
     * Set numberrooms
     *
     * @param integer $numberrooms
     * @return Properties
     */
    public function setNumberrooms($numberrooms)
    {
        $this->numberrooms = $numberrooms;

        return $this;
    }

    /**
     * Get numberrooms
     *
     * @return integer 
     */
    public function getNumberrooms()
    {
        return $this->numberrooms;
    }

    /**
     * Set roomprice
     *
     * @param float $roomprice
     * @return Properties
     */
    public function setRoomprice($roomprice)
    {
        $this->roomprice = $roomprice;

        return $this;
    }

    /**
     * Get roomprice
     *
     * @return float 
     */
    public function getRoomprice()
    {
        return $this->roomprice;
    }

    /**
     * Set roompriceoutseason
     *
     * @param float $roompriceoutseason
     * @return Properties
     */
    public function setRoompriceoutseason($roompriceoutseason)
    {
        $this->roompriceoutseason = $roompriceoutseason;

        return $this;
    }

    /**
     * Get roompriceoutseason
     *
     * @return float 
     */
    public function getRoompriceoutseason()
    {
        return $this->roompriceoutseason;
    }

    /**
     * Set wcindependents
     *
     * @param integer $wcindependents
     * @return Properties
     */
    public function setWcindependents($wcindependents)
    {
        $this->wcindependents = $wcindependents;

        return $this;
    }

    /**
     * Get wcindependents
     *
     * @return integer 
     */
    public function getWcindependents()
    {
        return $this->wcindependents;
    }

    /**
     * Set wcshared
     *
     * @param integer $wcshared
     * @return Properties
     */
    public function setWcshared($wcshared)
    {
        $this->wcshared = $wcshared;

        return $this;
    }

    /**
     * Get wcshared
     *
     * @return integer 
     */
    public function getWcshared()
    {
        return $this->wcshared;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Properties
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
     * Set addressprivate
     *
     * @param string $addressprivate
     * @return Properties
     */
    public function setAddressprivate($addressprivate)
    {
        $this->addressprivate = $addressprivate;

        return $this;
    }

    /**
     * Get addressprivate
     *
     * @return string 
     */
    public function getAddressprivate()
    {
        return $this->addressprivate;
    }

    /**
     * Set entrecalleuno
     *
     * @param string $entrecalleuno
     * @return Properties
     */
    public function setEntrecalleuno($entrecalleuno)
    {
        $this->entrecalleuno = $entrecalleuno;

        return $this;
    }

    /**
     * Get entrecalleuno
     *
     * @return string 
     */
    public function getEntrecalleuno()
    {
        return $this->entrecalleuno;
    }

    /**
     * Set entrecalledos
     *
     * @param string $entrecalledos
     * @return Properties
     */
    public function setEntrecalledos($entrecalledos)
    {
        $this->entrecalledos = $entrecalledos;

        return $this;
    }

    /**
     * Get entrecalledos
     *
     * @return string 
     */
    public function getEntrecalledos()
    {
        return $this->entrecalledos;
    }

    /**
     * Set barrio
     *
     * @param string $barrio
     * @return Properties
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio
     *
     * @return string 
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Properties
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
     * @return Properties
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
     * Set zipcode
     *
     * @param string $zipcode
     * @return Properties
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Properties
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param float $lon
     * @return Properties
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return float 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set bedrooms
     *
     * @param integer $bedrooms
     * @return Properties
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
     * @return Properties
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
     * Set bathrooms
     *
     * @param integer $bathrooms
     * @return Properties
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;

        return $this;
    }

    /**
     * Get bathrooms
     *
     * @return integer 
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return Properties
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
     * Set personauto
     *
     * @param string $personauto
     * @return Properties
     */
    public function setPersonauto($personauto)
    {
        $this->personauto = $personauto;

        return $this;
    }

    /**
     * Get personauto
     *
     * @return string 
     */
    public function getPersonauto()
    {
        return $this->personauto;
    }

    /**
     * Set dateauto
     *
     * @param \DateTime $dateauto
     * @return Properties
     */
    public function setDateauto($dateauto)
    {
        $this->dateauto = $dateauto;

        return $this;
    }

    /**
     * Get dateauto
     *
     * @return \DateTime 
     */
    public function getDateauto()
    {
        return $this->dateauto;
    }

    /**
     * Set signed
     *
     * @param boolean $signed
     * @return Properties
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
     * Set approved
     *
     * @param boolean $approved
     * @return Properties
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
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Properties
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
     * Set plublished
     *
     * @param boolean $plublished
     * @return Properties
     */
    public function setPlublished($plublished)
    {
        $this->plublished = $plublished;

        return $this;
    }

    /**
     * Get plublished
     *
     * @return boolean 
     */
    public function getPlublished()
    {
        return $this->plublished;
    }

    /**
     * Set numberVisits
     *
     * @param integer $numberVisits
     * @return Properties
     */
    public function setNumberVisits($numberVisits)
    {
        $this->numberVisits = $numberVisits;

        return $this;
    }

    /**
     * Get numberVisits
     *
     * @return integer 
     */
    public function getNumberVisits()
    {
        return $this->numberVisits;
    }

    /**
     * Set featured
     *
     * @param boolean $featured
     * @return Properties
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return Properties
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set country
     *
     * @param \BackendBundle\Entity\Country $country
     * @return Properties
     */
    public function setCountry(\BackendBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \BackendBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set roomType
     *
     * @param \BackendBundle\Entity\RoomType $roomType
     * @return Properties
     */
    public function setRoomType(\BackendBundle\Entity\RoomType $roomType = null)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get roomType
     *
     * @return \BackendBundle\Entity\RoomType 
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Properties
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
