<?php

namespace Proxies\__CG__\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Properties extends \BackendBundle\Entity\Properties implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'reference', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'guesthouse', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'independentapartment', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'numberrooms', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'roomprice', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'roompriceoutseason', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'wcindependents', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'wcshared', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'address', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'addressprivate', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'entrecalleuno', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'entrecalledos', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'barrio', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'city', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'state', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'zipcode', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'lat', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'lon', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'bedrooms', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'beds', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'bathrooms', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'capacity', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'personauto', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'dateauto', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'signed', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'approved', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'dateadd', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'plublished', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'numberVisits', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'featured', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'deleted', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'country', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'roomType', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'reference', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'guesthouse', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'independentapartment', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'numberrooms', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'roomprice', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'roompriceoutseason', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'wcindependents', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'wcshared', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'address', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'addressprivate', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'entrecalleuno', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'entrecalledos', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'barrio', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'city', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'state', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'zipcode', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'lat', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'lon', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'bedrooms', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'beds', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'bathrooms', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'capacity', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'personauto', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'dateauto', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'signed', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'approved', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'dateadd', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'plublished', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'numberVisits', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'featured', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'deleted', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'country', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'roomType', '' . "\0" . 'BackendBundle\\Entity\\Properties' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Properties $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuesthouse($guesthouse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuesthouse', [$guesthouse]);

        return parent::setGuesthouse($guesthouse);
    }

    /**
     * {@inheritDoc}
     */
    public function getGuesthouse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuesthouse', []);

        return parent::getGuesthouse();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndependentapartment($independentapartment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndependentapartment', [$independentapartment]);

        return parent::setIndependentapartment($independentapartment);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndependentapartment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndependentapartment', []);

        return parent::getIndependentapartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberrooms($numberrooms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberrooms', [$numberrooms]);

        return parent::setNumberrooms($numberrooms);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberrooms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberrooms', []);

        return parent::getNumberrooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoomprice($roomprice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoomprice', [$roomprice]);

        return parent::setRoomprice($roomprice);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoomprice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoomprice', []);

        return parent::getRoomprice();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoompriceoutseason($roompriceoutseason)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoompriceoutseason', [$roompriceoutseason]);

        return parent::setRoompriceoutseason($roompriceoutseason);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoompriceoutseason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoompriceoutseason', []);

        return parent::getRoompriceoutseason();
    }

    /**
     * {@inheritDoc}
     */
    public function setWcindependents($wcindependents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWcindependents', [$wcindependents]);

        return parent::setWcindependents($wcindependents);
    }

    /**
     * {@inheritDoc}
     */
    public function getWcindependents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWcindependents', []);

        return parent::getWcindependents();
    }

    /**
     * {@inheritDoc}
     */
    public function setWcshared($wcshared)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWcshared', [$wcshared]);

        return parent::setWcshared($wcshared);
    }

    /**
     * {@inheritDoc}
     */
    public function getWcshared()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWcshared', []);

        return parent::getWcshared();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressprivate($addressprivate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressprivate', [$addressprivate]);

        return parent::setAddressprivate($addressprivate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressprivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressprivate', []);

        return parent::getAddressprivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntrecalleuno($entrecalleuno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntrecalleuno', [$entrecalleuno]);

        return parent::setEntrecalleuno($entrecalleuno);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntrecalleuno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntrecalleuno', []);

        return parent::getEntrecalleuno();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntrecalledos($entrecalledos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntrecalledos', [$entrecalledos]);

        return parent::setEntrecalledos($entrecalledos);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntrecalledos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntrecalledos', []);

        return parent::getEntrecalledos();
    }

    /**
     * {@inheritDoc}
     */
    public function setBarrio($barrio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBarrio', [$barrio]);

        return parent::setBarrio($barrio);
    }

    /**
     * {@inheritDoc}
     */
    public function getBarrio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBarrio', []);

        return parent::getBarrio();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode($zipcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', [$zipcode]);

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', []);

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setLat($lat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', [$lat]);

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', []);

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLon($lon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLon', [$lon]);

        return parent::setLon($lon);
    }

    /**
     * {@inheritDoc}
     */
    public function getLon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLon', []);

        return parent::getLon();
    }

    /**
     * {@inheritDoc}
     */
    public function setBedrooms($bedrooms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBedrooms', [$bedrooms]);

        return parent::setBedrooms($bedrooms);
    }

    /**
     * {@inheritDoc}
     */
    public function getBedrooms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBedrooms', []);

        return parent::getBedrooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeds($beds)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeds', [$beds]);

        return parent::setBeds($beds);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeds', []);

        return parent::getBeds();
    }

    /**
     * {@inheritDoc}
     */
    public function setBathrooms($bathrooms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBathrooms', [$bathrooms]);

        return parent::setBathrooms($bathrooms);
    }

    /**
     * {@inheritDoc}
     */
    public function getBathrooms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBathrooms', []);

        return parent::getBathrooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacity($capacity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacity', [$capacity]);

        return parent::setCapacity($capacity);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacity', []);

        return parent::getCapacity();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonauto($personauto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonauto', [$personauto]);

        return parent::setPersonauto($personauto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonauto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonauto', []);

        return parent::getPersonauto();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateauto($dateauto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateauto', [$dateauto]);

        return parent::setDateauto($dateauto);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateauto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateauto', []);

        return parent::getDateauto();
    }

    /**
     * {@inheritDoc}
     */
    public function setSigned($signed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSigned', [$signed]);

        return parent::setSigned($signed);
    }

    /**
     * {@inheritDoc}
     */
    public function getSigned()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSigned', []);

        return parent::getSigned();
    }

    /**
     * {@inheritDoc}
     */
    public function setApproved($approved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApproved', [$approved]);

        return parent::setApproved($approved);
    }

    /**
     * {@inheritDoc}
     */
    public function getApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApproved', []);

        return parent::getApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateadd($dateadd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateadd', [$dateadd]);

        return parent::setDateadd($dateadd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateadd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateadd', []);

        return parent::getDateadd();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlublished($plublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlublished', [$plublished]);

        return parent::setPlublished($plublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlublished', []);

        return parent::getPlublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberVisits($numberVisits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberVisits', [$numberVisits]);

        return parent::setNumberVisits($numberVisits);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberVisits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberVisits', []);

        return parent::getNumberVisits();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeatured($featured)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeatured', [$featured]);

        return parent::setFeatured($featured);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeatured()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeatured', []);

        return parent::getFeatured();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\BackendBundle\Entity\Country $country = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoomType(\BackendBundle\Entity\RoomType $roomType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoomType', [$roomType]);

        return parent::setRoomType($roomType);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoomType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoomType', []);

        return parent::getRoomType();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\BackendBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}
