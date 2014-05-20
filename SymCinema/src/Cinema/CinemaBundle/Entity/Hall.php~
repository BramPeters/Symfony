<?php
// src/Cinema/CinemaBundle/Entity/Hall.php

namespace Cinema\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cinema\CinemaBundle\Entity\Repository\HallRepository")
 * @ORM\Table(name="hall")
 * @ORM\HasLifecycleCallbacks
 */
class Hall
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    protected $seats;  
    
    /**
     * @ORM\OneToMany(targetEntity="Showing", mappedBy="Hall")
     */
    protected $showings;
    
    
    public function __construct()
    {
        //$this->showings = new ArrayCollection();  //te vroeg?

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
     * Set name
     *
     * @param string $name
     * @return Hall
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set seats
     *
     * @param integer $seats
     * @return Hall
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get seats
     *
     * @return integer 
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Add showings
     *
     * @param \Cinema\CinemaBundle\Entity\Showing $showings
     * @return Hall
     */
    public function addShowing(\Cinema\CinemaBundle\Entity\Showing $showings)
    {
        $this->showings[] = $showings;

        return $this;
    }

    /**
     * Remove showings
     *
     * @param \Cinema\CinemaBundle\Entity\Showing $showings
     */
    public function removeShowing(\Cinema\CinemaBundle\Entity\Showing $showings)
    {
        $this->showings->removeElement($showings);
    }

    /**
     * Get showings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShowings()
    {
        return $this->showings;
    }
}
