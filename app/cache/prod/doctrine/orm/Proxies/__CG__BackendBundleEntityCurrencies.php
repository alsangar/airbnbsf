<?php

namespace Proxies\__CG__\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Currencies extends \BackendBundle\Entity\Currencies implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'currency', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'iso', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'conversion', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'currencyDefault', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'active'];
        }

        return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'currency', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'iso', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'conversion', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'currencyDefault', '' . "\0" . 'BackendBundle\\Entity\\Currencies' . "\0" . 'active'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Currencies $proxy) {
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
    public function setCurrency($currency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrency', [$currency]);

        return parent::setCurrency($currency);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrency', []);

        return parent::getCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setIso($iso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIso', [$iso]);

        return parent::setIso($iso);
    }

    /**
     * {@inheritDoc}
     */
    public function getIso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIso', []);

        return parent::getIso();
    }

    /**
     * {@inheritDoc}
     */
    public function setConversion($conversion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConversion', [$conversion]);

        return parent::setConversion($conversion);
    }

    /**
     * {@inheritDoc}
     */
    public function getConversion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConversion', []);

        return parent::getConversion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyDefault($currencyDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyDefault', [$currencyDefault]);

        return parent::setCurrencyDefault($currencyDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyDefault', []);

        return parent::getCurrencyDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

}
