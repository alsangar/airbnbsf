<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location__location", indexes={@ORM\Index(name="IDX_3E8B1ADD8BAC62AF", columns={"city_id"})})
 * @ORM\Entity
 */
class Location
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="canonical_name", type="string", length=255, nullable=true)
     */
    private $canonicalName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=5, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="other", type="string", length=255, nullable=true)
     */
    private $other;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=8, nullable=true)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=21, scale=18, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=21, scale=18, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="entre_calle_uno", type="string", length=255, nullable=true)
     */
    private $entreCalleUno;

    /**
     * @var string
     *
     * @ORM\Column(name="entre_calle_dos", type="string", length=255, nullable=true)
     */
    private $entreCalleDos;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio", type="string", length=255, nullable=true)
     */
    private $barrio;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;


    public function __toString()
    {
        $return = $this->name .' - '. $this->address . ' ' . $this->number . '. ' . $this->city;

        return (string)$return;
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
     * @return Location
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
     * Set canonicalName
     *
     * @param string $canonicalName
     * @return Location
     */
    public function setCanonicalName($canonicalName)
    {
        $this->canonicalName = $canonicalName;

        return $this;
    }

    /**
     * Get canonicalName
     *
     * @return string 
     */
    public function getCanonicalName()
    {
        return $this->canonicalName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Location
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
     * Set number
     *
     * @param string $number
     * @return Location
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set other
     *
     * @param string $other
     * @return Location
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Location
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set entreCalleUno
     *
     * @param string $entreCalleUno
     * @return Location
     */
    public function setEntreCalleUno($entreCalleUno)
    {
        $this->entreCalleUno = $entreCalleUno;

        return $this;
    }

    /**
     * Get entreCalleUno
     *
     * @return string 
     */
    public function getEntreCalleUno()
    {
        return $this->entreCalleUno;
    }

    /**
     * Set entreCalleDos
     *
     * @param string $entreCalleDos
     * @return Location
     */
    public function setEntreCalleDos($entreCalleDos)
    {
        $this->entreCalleDos = $entreCalleDos;

        return $this;
    }

    /**
     * Get entreCalleDos
     *
     * @return string 
     */
    public function getEntreCalleDos()
    {
        return $this->entreCalleDos;
    }

    /**
     * Set barrio
     *
     * @param string $barrio
     * @return Location
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
     * @param \BackendBundle\Entity\City $city
     * @return Location
     */
    public function setCity(\BackendBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \BackendBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}
