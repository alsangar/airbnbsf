<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoicesLines
 *
 * @ORM\Table(name="invoices_lines")
 * @ORM\Entity
 */
class InvoicesLines
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
     * @ORM\Column(name="product_description", type="string", length=255, nullable=false)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_vat_excluded", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $amountVatExcluded;

    /**
     * @var \Invoices
     *
     * @ORM\ManyToOne(targetEntity="Invoices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     * })
     */
    private $invoice;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

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
     * Set productDescription
     *
     * @param string $productDescription
     * @return InvoicesLines
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string 
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set amountVatExcluded
     *
     * @param string $amountVatExcluded
     * @return InvoicesLines
     */
    public function setAmountVatExcluded($amountVatExcluded)
    {
        $this->amountVatExcluded = $amountVatExcluded;

        return $this;
    }

    /**
     * Get amountVatExcluded
     *
     * @return string 
     */
    public function getAmountVatExcluded()
    {
        return $this->amountVatExcluded;
    }

    /**
     * Set invoice
     *
     * @param \BackendBundle\Entity\Invoices $invoice
     * @return InvoicesLines
     */
    public function setInvoice(\BackendBundle\Entity\Invoices $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \BackendBundle\Entity\Invoices 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set product
     *
     * @param \BackendBundle\Entity\Products $product
     * @return InvoicesLines
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
}
