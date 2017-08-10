<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity
 */
class Languages
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
     * @ORM\Column(name="language", type="string", length=50, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=10, nullable=true)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity="ProductDescription", mappedBy="language", cascade={"persist"})
     */
    protected $langDescription;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->langDescription = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set language
     *
     * @param string $language
     * @return Languages
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set iso
     *
     * @param string $iso
     * @return Languages
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
     * Set image
     *
     * @param string $image
     * @return Languages
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Languages
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

    /**
     * Add langDescription
     *
     * @param \BackendBundle\Entity\ProductDescription $langDescription
     *
     * @return Languages
     */
    public function addLangDescription(\BackendBundle\Entity\ProductDescription $langDescription)
    {
        $this->langDescription[] = $langDescription;

        return $this;
    }

    /**
     * Remove langDescription
     *
     * @param \BackendBundle\Entity\ProductDescription $langDescription
     */
    public function removeLangDescription(\BackendBundle\Entity\ProductDescription $langDescription)
    {
        $this->langDescription->removeElement($langDescription);
    }

    /**
     * Get langDescription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLangDescription()
    {
        return $this->langDescription;
    }
}
