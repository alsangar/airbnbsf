<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductFeatures
 *
 * @ORM\Table(name="product_features")
 * @ORM\Entity
 */
class ProductFeatures
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
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="Features")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="feature_id", referencedColumnName="id")
     * })
     */
    private $feature;



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
     * Set product
     *
     * @param \BackendBundle\Entity\Products $product
     * @return ProductFeatures
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
     * Set feature
     *
     * @param \BackendBundle\Entity\Features $feature
     * @return ProductFeatures
     */
    public function setFeature(\BackendBundle\Entity\Features $feature = null)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return \BackendBundle\Entity\Features 
     */
    public function getFeature()
    {
        return $this->feature;
    }
}
