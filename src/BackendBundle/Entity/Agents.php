<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agents
 *
 * @ORM\Table(name="agents")
 * @ORM\Entity
 */
class Agents
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
     * @var integer
     *
     * @ORM\Column(name="user_id_agent", type="integer", nullable=false)
     */
    private $userIdAgent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=false)
     */
    private $dateadd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedeleted", type="datetime", nullable=false)
     */
    private $datedeleted;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agent_id", referencedColumnName="id")
     * })
     */
    private $agent;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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
     * Set userIdAgent
     *
     * @param integer $userIdAgent
     * @return Agents
     */
    public function setUserIdAgent($userIdAgent)
    {
        $this->userIdAgent = $userIdAgent;

        return $this;
    }

    /**
     * Get userIdAgent
     *
     * @return integer 
     */
    public function getUserIdAgent()
    {
        return $this->userIdAgent;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Agents
     */
    public function setDateadd($dateadd)
    {
        $this->dateadd = $dateadd;

        return $this;
    }

    /**
     * Get dateadd
     *
     * @return \DateTime 
     */
    public function getDateadd()
    {
        return $this->dateadd;
    }

    /**
     * Set datedeleted
     *
     * @param \DateTime $datedeleted
     * @return Agents
     */
    public function setDatedeleted($datedeleted)
    {
        $this->datedeleted = $datedeleted;

        return $this;
    }

    /**
     * Get datedeleted
     *
     * @return \DateTime 
     */
    public function getDatedeleted()
    {
        return $this->datedeleted;
    }

    /**
     * Set agent
     *
     * @param \BackendBundle\Entity\User $agent
     * @return Agents
     */
    public function setAgent(\BackendBundle\Entity\User $agent = null)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Agents
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
