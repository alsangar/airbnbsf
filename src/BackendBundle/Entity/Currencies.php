<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currencies
 *
 * @ORM\Table(name="currencies")
 * @ORM\Entity
 */
class Currencies
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
     * @ORM\Column(name="currency", type="string", length=50, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=10, nullable=true)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $conversion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="currency_default", type="boolean", nullable=false)
     */
    private $currencyDefault;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

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
     * Set currency
     *
     * @param string $currency
     * @return Currencies
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set iso
     *
     * @param string $iso
     * @return Currencies
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string 
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set conversion
     *
     * @param string $conversion
     * @return Currencies
     */
    public function setConversion($conversion)
    {
        $this->conversion = $conversion;

        return $this;
    }

    /**
     * Get conversion
     *
     * @return string 
     */
    public function getConversion()
    {
        return $this->conversion;
    }

    /**
     * Set currencyDefault
     *
     * @param boolean $currencyDefault
     * @return Currencies
     */
    public function setCurrencyDefault($currencyDefault)
    {
        $this->currencyDefault = $currencyDefault;

        return $this;
    }

    /**
     * Get currencyDefault
     *
     * @return boolean 
     */
    public function getCurrencyDefault()
    {
        return $this->currencyDefault;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Currencies
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
