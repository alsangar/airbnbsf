<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookings
 *
 * @ORM\Table(name="bookings")
 * @ORM\Entity
 */
class Bookings
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
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=false)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_lastname", type="string", length=255, nullable=false)
     */
    private $customerLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone", type="string", length=255, nullable=false)
     */
    private $customerPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=255, nullable=false)
     */
    private $customerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="product_reference", type="string", length=255, nullable=true)
     */
    private $productReference;

    /**
     * @var string
     *
     * @ORM\Column(name="product_address", type="string", length=255, nullable=false)
     */
    private $productAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checkin", type="date", nullable=false)
     */
    private $checkin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="checkout", type="date", nullable=false)
     */
    private $checkout;

    /**
     * @var integer
     *
     * @ORM\Column(name="nights", type="integer", nullable=true)
     */
    private $nights;

    /**
     * @var string
     *
     * @ORM\Column(name="price_night", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $priceNight;

    /**
     * @var string
     *
     * @ORM\Column(name="price_total", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $priceTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_fee", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $customerFee;

    /**
     * @var string
     *
     * @ORM\Column(name="anfitrion_fee", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $anfitrionFee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="book_date", type="datetime", nullable=false)
     */
    private $bookDate;

    /**
     * @var string
     *
     * @ORM\Column(name="book_ip", type="string", length=255, nullable=false)
     */
    private $bookIp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="book_confirmed", type="boolean", nullable=true)
     */
    private $bookConfirmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="pax", type="integer", nullable=false)
     */
    private $pax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="book_payed", type="boolean", nullable=true)
     */
    private $bookPayed;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=255, nullable=true, options={"comment":"Types: -total- payment or -partial- payment."})
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal_fee", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $paypalFee;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userAnfitrion_id", referencedColumnName="id")
     * })
     */
    private $useranfitrion;

    /**
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userCustomer_id", referencedColumnName="id")
     * })
     */
    private $usercustomer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bookDate = new \DateTime();

        $this->customerFee = 0;
        $this->anfitrionFee = 0;
        $this->paypalFee = 0;
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
     * Set customerName
     *
     * @param string $customerName
     * @return Bookings
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string 
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerLastname
     *
     * @param string $customerLastname
     * @return Bookings
     */
    public function setCustomerLastname($customerLastname)
    {
        $this->customerLastname = $customerLastname;

        return $this;
    }

    /**
     * Get customerLastname
     *
     * @return string 
     */
    public function getCustomerLastname()
    {
        return $this->customerLastname;
    }

    /**
     * Set customerPhone
     *
     * @param string $customerPhone
     * @return Bookings
     */
    public function setCustomerPhone($customerPhone)
    {
        $this->customerPhone = $customerPhone;

        return $this;
    }

    /**
     * Get customerPhone
     *
     * @return string 
     */
    public function getCustomerPhone()
    {
        return $this->customerPhone;
    }

    /**
     * Set customerEmail
     *
     * @param string $customerEmail
     * @return Bookings
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get customerEmail
     *
     * @return string 
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set productReference
     *
     * @param string $productReference
     * @return Bookings
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;

        return $this;
    }

    /**
     * Get productReference
     *
     * @return string 
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Set productAddress
     *
     * @param string $productAddress
     * @return Bookings
     */
    public function setProductAddress($productAddress)
    {
        $this->productAddress = $productAddress;

        return $this;
    }

    /**
     * Get productAddress
     *
     * @return string 
     */
    public function getProductAddress()
    {
        return $this->productAddress;
    }

    /**
     * Set checkin
     *
     * @param \DateTime $checkin
     * @return Bookings
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;

        return $this;
    }

    /**
     * Get checkin
     *
     * @return \DateTime 
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * Set checkout
     *
     * @param \DateTime $checkout
     * @return Bookings
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;

        return $this;
    }

    /**
     * Get checkout
     *
     * @return \DateTime 
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * Set nights
     *
     * @param integer $nights
     * @return Bookings
     */
    public function setNights($nights)
    {
        $this->nights = $nights;

        return $this;
    }

    /**
     * Get nights
     *
     * @return integer 
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Set priceNight
     *
     * @param string $priceNight
     * @return Bookings
     */
    public function setPriceNight($priceNight)
    {
        $this->priceNight = $priceNight;

        return $this;
    }

    /**
     * Get priceNight
     *
     * @return string 
     */
    public function getPriceNight()
    {
        return $this->priceNight;
    }

    /**
     * Set priceTotal
     *
     * @param string $priceTotal
     * @return Bookings
     */
    public function setPriceTotal($priceTotal)
    {
        $this->priceTotal = $priceTotal;

        return $this;
    }

    /**
     * Get priceTotal
     *
     * @return string 
     */
    public function getPriceTotal()
    {
        return $this->priceTotal;
    }

    /**
     * Set customerFee
     *
     * @param string $customerFee
     * @return Bookings
     */
    public function setCustomerFee($customerFee)
    {
        $this->customerFee = $customerFee;

        return $this;
    }

    /**
     * Get customerFee
     *
     * @return string 
     */
    public function getCustomerFee()
    {
        return $this->customerFee;
    }

    /**
     * Set anfitrionFee
     *
     * @param string $anfitrionFee
     * @return Bookings
     */
    public function setAnfitrionFee($anfitrionFee)
    {
        $this->anfitrionFee = $anfitrionFee;

        return $this;
    }

    /**
     * Get anfitrionFee
     *
     * @return string 
     */
    public function getAnfitrionFee()
    {
        return $this->anfitrionFee;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Bookings
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return Bookings
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     * @return Bookings
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string 
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set bookDate
     *
     * @param \DateTime $bookDate
     * @return Bookings
     */
    public function setBookDate($bookDate)
    {
        $this->bookDate = $bookDate;

        return $this;
    }

    /**
     * Get bookDate
     *
     * @return \DateTime 
     */
    public function getBookDate()
    {
        return $this->bookDate;
    }

    /**
     * Set bookIp
     *
     * @param string $bookIp
     * @return Bookings
     */
    public function setBookIp($bookIp)
    {
        $this->bookIp = $bookIp;

        return $this;
    }

    /**
     * Get bookIp
     *
     * @return string 
     */
    public function getBookIp()
    {
        return $this->bookIp;
    }

    /**
     * Set bookConfirmed
     *
     * @param boolean $bookConfirmed
     * @return Bookings
     */
    public function setBookConfirmed($bookConfirmed)
    {
        $this->bookConfirmed = $bookConfirmed;

        return $this;
    }

    /**
     * Get bookConfirmed
     *
     * @return boolean 
     */
    public function getBookConfirmed()
    {
        return $this->bookConfirmed;
    }

    /**
     * Set pax
     *
     * @param integer $pax
     * @return Bookings
     */
    public function setPax($pax)
    {
        $this->pax = $pax;

        return $this;
    }

    /**
     * Get pax
     *
     * @return integer 
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * Set bookPayed
     *
     * @param boolean $bookPayed
     * @return Bookings
     */
    public function setBookPayed($bookPayed)
    {
        $this->bookPayed = $bookPayed;

        return $this;
    }

    /**
     * Get bookPayed
     *
     * @return boolean 
     */
    public function getBookPayed()
    {
        return $this->bookPayed;
    }

    /**
     * Set useranfitrion
     *
     * @param \BackendBundle\Entity\User $useranfitrion
     * @return Bookings
     */
    public function setUseranfitrion(\BackendBundle\Entity\User $useranfitrion = null)
    {
        $this->useranfitrion = $useranfitrion;

        return $this;
    }

    /**
     * Get useranfitrion
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUseranfitrion()
    {
        return $this->useranfitrion;
    }

    /**
     * Set product
     *
     * @param \BackendBundle\Entity\Products $product
     * @return Bookings
     */
    public function setProduct(\BackendBundle\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \BackendBundle\Entity\Products 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set usercustomer
     *
     * @param \BackendBundle\Entity\User $usercustomer
     * @return Bookings
     */
    public function setUsercustomer(\BackendBundle\Entity\User $usercustomer = null)
    {
        $this->usercustomer = $usercustomer;

        return $this;
    }

    /**
     * Get usercustomer
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUsercustomer()
    {
        return $this->usercustomer;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return Bookings
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set paypalFee
     *
     * @param string $paypalFee
     *
     * @return Bookings
     */
    public function setPaypalFee($paypalFee)
    {
        $this->paypalFee = $paypalFee;

        return $this;
    }

    /**
     * Get paypalFee
     *
     * @return string
     */
    public function getPaypalFee()
    {
        return $this->paypalFee;
    }
}
