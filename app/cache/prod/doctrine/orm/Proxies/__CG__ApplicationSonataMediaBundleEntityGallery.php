<?php

namespace Proxies\__CG__\Application\Sonata\MediaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Gallery extends \Application\Sonata\MediaBundle\Entity\Gallery implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'context', 'name', 'enabled', 'updatedAt', 'createdAt', 'defaultFormat', 'galleryHasMedias'];
        }

        return ['__isInitialized__', 'id', 'context', 'name', 'enabled', 'updatedAt', 'createdAt', 'defaultFormat', 'galleryHasMedias'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Gallery $proxy) {
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
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', []);

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', []);

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultFormat($defaultFormat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultFormat', [$defaultFormat]);

        return parent::setDefaultFormat($defaultFormat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultFormat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultFormat', []);

        return parent::getDefaultFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setGalleryHasMedias($galleryHasMedias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalleryHasMedias', [$galleryHasMedias]);

        return parent::setGalleryHasMedias($galleryHasMedias);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalleryHasMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalleryHasMedias', []);

        return parent::getGalleryHasMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function addGalleryHasMedias(\Sonata\MediaBundle\Model\GalleryHasMediaInterface $galleryHasMedia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGalleryHasMedias', [$galleryHasMedia]);

        return parent::addGalleryHasMedias($galleryHasMedia);
    }

    /**
     * {@inheritDoc}
     */
    public function setContext($context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContext', [$context]);

        return parent::setContext($context);
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContext', []);

        return parent::getContext();
    }

}
