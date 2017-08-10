<?php

namespace Proxies\__CG__\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Coupons extends \BackendBundle\Entity\Coupons implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'amount', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'isPercentage', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'isFixed', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'dateadd', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'dateused', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'validFrom', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'validTo', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'amount', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'isPercentage', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'isFixed', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'dateadd', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'dateused', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'validFrom', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'validTo', '' . "\0" . 'BackendBundle\\Entity\\Coupons' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Coupons $proxy) {
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
    public function setAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmount', [$amount]);

        return parent::setAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmount', []);

        return parent::getAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPercentage($isPercentage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPercentage', [$isPercentage]);

        return parent::setIsPercentage($isPercentage);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPercentage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPercentage', []);

        return parent::getIsPercentage();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFixed($isFixed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFixed', [$isFixed]);

        return parent::setIsFixed($isFixed);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFixed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFixed', []);

        return parent::getIsFixed();
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
    public function setDateused($dateused)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateused', [$dateused]);

        return parent::setDateused($dateused);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateused()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateused', []);

        return parent::getDateused();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidFrom($validFrom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidFrom', [$validFrom]);

        return parent::setValidFrom($validFrom);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidFrom', []);

        return parent::getValidFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidTo($validTo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidTo', [$validTo]);

        return parent::setValidTo($validTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidTo', []);

        return parent::getValidTo();
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
