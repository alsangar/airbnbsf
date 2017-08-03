<?php

namespace Proxies\__CG__\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Payment extends \BackendBundle\Entity\Payment implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'number', 'description', 'clientEmail', 'clientId', 'totalAmount', 'currencyCode', 'details', 'creditCard', 'bankAccount');
        }

        return array('__isInitialized__', 'id', 'number', 'description', 'clientEmail', 'clientId', 'totalAmount', 'currencyCode', 'details', 'creditCard', 'bankAccount');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Payment $proxy) {
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
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', array());

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', array($number));

        return parent::setNumber($number);
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientEmail', array());

        return parent::getClientEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientEmail($clientEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientEmail', array($clientEmail));

        return parent::setClientEmail($clientEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientId', array());

        return parent::getClientId();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientId($clientId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientId', array($clientId));

        return parent::setClientId($clientId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalAmount', array());

        return parent::getTotalAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalAmount($totalAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalAmount', array($totalAmount));

        return parent::setTotalAmount($totalAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyCode', array());

        return parent::getCurrencyCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyCode($currencyCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyCode', array($currencyCode));

        return parent::setCurrencyCode($currencyCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', array());

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setDetails($details)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDetails', array($details));

        return parent::setDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditCard()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditCard', array());

        return parent::getCreditCard();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditCard(\Payum\Core\Model\CreditCardInterface $creditCard = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditCard', array($creditCard));

        return parent::setCreditCard($creditCard);
    }

    /**
     * {@inheritDoc}
     */
    public function getBankAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBankAccount', array());

        return parent::getBankAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setBankAccount(\Payum\Core\Model\BankAccountInterface $bankAccount = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBankAccount', array($bankAccount));

        return parent::setBankAccount($bankAccount);
    }

}
