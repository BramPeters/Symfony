<?php
// src/Cinema/CinemaBundle/Entity/Ticketsale.php

namespace Cinema\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cinema\CinemaBundle\Entity\Repository\TicketsalesRepository")
 * @ORM\Table(name="Ticketsale")
 * @ORM\HasLifecycleCallbacks
 */
class Ticketsale
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\manyToOne(targetEntity="Showing", inversedBy="ticketsales")
     * @ORM\JoinColumn(name="showing_id", referencedColumnName="id")
     */
    protected $Showing;

    /**
     * @ORM\manyToOne(targetEntity="User", inversedBy="Ticketsales")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $User;

    /**
     * @ORM\Column(type="integer")
     */
    protected $TicketCount;


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
     * Set TicketCount
     *
     * @param integer $ticketCount
     * @return Ticketsale
     */
    public function setTicketCount($ticketCount)
    {
        $this->TicketCount = $ticketCount;

        return $this;
    }

    /**
     * Get TicketCount
     *
     * @return integer 
     */
    public function getTicketCount()
    {
        return $this->TicketCount;
    }

    /**
     * Set Showing
     *
     * @param \Cinema\CinemaBundle\Entity\Showing $showing
     * @return Ticketsale
     */
    public function setShowing(\Cinema\CinemaBundle\Entity\Showing $showing = null)
    {
        $this->Showing = $showing;

        return $this;
    }

    /**
     * Get Showing
     *
     * @return \Cinema\CinemaBundle\Entity\Showing 
     */
    public function getShowing()
    {
        return $this->Showing;
    }

    /**
     * Set User
     *
     * @param \Cinema\CinemaBundle\Entity\User $user
     * @return Ticketsale
     */
    public function setUser(\Cinema\CinemaBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \Cinema\CinemaBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
}
