<?php

namespace Proxies\__CG__\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Products extends \BackendBundle\Entity\Products implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'title', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'description', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'reference', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'roomPrice', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'wcIndependents', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'wcShared', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'bedrooms', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'beds', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'capacity', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'personAuto', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'signed', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'highStanding', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'approved', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'published', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'featured', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'deletedat', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'roomPriceOutSeason', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'category', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'location', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'producttype', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'user', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'roomtype', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'gallery', 'langDescription', 'service', 'feature');
        }

        return array('__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'title', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'description', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'reference', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'roomPrice', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'wcIndependents', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'wcShared', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'bedrooms', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'beds', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'capacity', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'personAuto', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'signed', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'highStanding', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'approved', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'published', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'featured', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'deletedat', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'roomPriceOutSeason', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'category', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'location', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'producttype', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'user', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'roomtype', '' . "\0" . 'BackendBundle\\Entity\\Products' . "\0" . 'gallery', 'langDescription', 'service', 'feature');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Products $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', array($reference));

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoomPrice($roomPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoomPrice', array($roomPrice));

        return parent::setRoomPrice($roomPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoomPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoomPrice', array());

        return parent::getRoomPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setWcIndependents($wcIndependents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWcIndependents', array($wcIndependents));

        return parent::setWcIndependents($wcIndependents);
    }

    /**
     * {@inheritDoc}
     */
    public function getWcIndependents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWcIndependents', array());

        return parent::getWcIndependents();
    }

    /**
     * {@inheritDoc}
     */
    public function setWcShared($wcShared)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWcShared', array($wcShared));

        return parent::setWcShared($wcShared);
    }

    /**
     * {@inheritDoc}
     */
    public function getWcShared()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWcShared', array());

        return parent::getWcShared();
    }

    /**
     * {@inheritDoc}
     */
    public function setBedrooms($bedrooms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBedrooms', array($bedrooms));

        return parent::setBedrooms($bedrooms);
    }

    /**
     * {@inheritDoc}
     */
    public function getBedrooms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBedrooms', array());

        return parent::getBedrooms();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeds($beds)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeds', array($beds));

        return parent::setBeds($beds);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeds()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeds', array());

        return parent::getBeds();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacity($capacity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacity', array($capacity));

        return parent::setCapacity($capacity);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacity', array());

        return parent::getCapacity();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersonAuto($personAuto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonAuto', array($personAuto));

        return parent::setPersonAuto($personAuto);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonAuto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonAuto', array());

        return parent::getPersonAuto();
    }

    /**
     * {@inheritDoc}
     */
    public function setSigned($signed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSigned', array($signed));

        return parent::setSigned($signed);
    }

    /**
     * {@inheritDoc}
     */
    public function getSigned()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSigned', array());

        return parent::getSigned();
    }

    /**
     * {@inheritDoc}
     */
    public function setHighStanding($highStanding)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHighStanding', array($highStanding));

        return parent::setHighStanding($highStanding);
    }

    /**
     * {@inheritDoc}
     */
    public function getHighStanding()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHighStanding', array());

        return parent::getHighStanding();
    }

    /**
     * {@inheritDoc}
     */
    public function setApproved($approved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApproved', array($approved));

        return parent::setApproved($approved);
    }

    /**
     * {@inheritDoc}
     */
    public function getApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApproved', array());

        return parent::getApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', array($published));

        return parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublished', array());

        return parent::getPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeatured($featured)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeatured', array($featured));

        return parent::setFeatured($featured);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeatured()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeatured', array());

        return parent::getFeatured();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedat($deletedat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedat', array($deletedat));

        return parent::setDeletedat($deletedat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedat', array());

        return parent::getDeletedat();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoomPriceOutSeason($roomPriceOutSeason)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoomPriceOutSeason', array($roomPriceOutSeason));

        return parent::setRoomPriceOutSeason($roomPriceOutSeason);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoomPriceOutSeason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoomPriceOutSeason', array());

        return parent::getRoomPriceOutSeason();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\BackendBundle\Entity\Categories $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation(\BackendBundle\Entity\Location $location = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', array($location));

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', array());

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducttype(\BackendBundle\Entity\ProductType $producttype = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducttype', array($producttype));

        return parent::setProducttype($producttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducttype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducttype', array());

        return parent::getProducttype();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\BackendBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoomtype(\BackendBundle\Entity\RoomType $roomtype = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoomtype', array($roomtype));

        return parent::setRoomtype($roomtype);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoomtype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoomtype', array());

        return parent::getRoomtype();
    }

    /**
     * {@inheritDoc}
     */
    public function addLangDescription(\BackendBundle\Entity\ProductDescription $langDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLangDescription', array($langDescription));

        return parent::addLangDescription($langDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLangDescription(\BackendBundle\Entity\ProductDescription $langDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLangDescription', array($langDescription));

        return parent::removeLangDescription($langDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangDescription', array());

        return parent::getLangDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setGallery(\Application\Sonata\MediaBundle\Entity\Gallery $gallery = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGallery', array($gallery));

        return parent::setGallery($gallery);
    }

    /**
     * {@inheritDoc}
     */
    public function getGallery()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGallery', array());

        return parent::getGallery();
    }

    /**
     * {@inheritDoc}
     */
    public function addService(\BackendBundle\Entity\ProductServices $service)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addService', array($service));

        return parent::addService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function removeService(\BackendBundle\Entity\ProductServices $service)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeService', array($service));

        return parent::removeService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getService', array());

        return parent::getService();
    }

    /**
     * {@inheritDoc}
     */
    public function addFeature(\BackendBundle\Entity\ProductFeatures $feature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFeature', array($feature));

        return parent::addFeature($feature);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFeature(\BackendBundle\Entity\ProductFeatures $feature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFeature', array($feature));

        return parent::removeFeature($feature);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeature', array());

        return parent::getFeature();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
