<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 */
class User extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



     /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     * 
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     * 
     * @Assert\NotBlank(message="Please enter your last name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="integer", length=15, nullable=true)
     * 
     * @Assert\NotBlank(message="Please enter your phone.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=9,
     *     max=15,
     *     minMessage="The number is too short.",
     *     maxMessage="The number is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $phone;

    /**
     * @ORM\OneToMany(targetEntity="Favorites", mappedBy="user", cascade={"persist"}, orphanRemoval=true)
     */
    protected $favorites;

    public function __construct() {
        parent::__construct();

        $this->favorites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return (string) $this->getUsername();
    }

    /**
     * Add favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     * @return User
     */
    public function addFavorite(\BackendBundle\Entity\Favorites $favorites) {
        $this->favorites[] = $favorites;

        return $this;
    }

    /**
     * Remove favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     */
    public function removeFavorite(\BackendBundle\Entity\Favorites $favorites) {
        $this->favorites->removeElement($favorites);
    }

    /**
     * Get favorites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavorites() {
        return $this->favorites;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return User
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone() {
        return $this->phone;
    }

}
