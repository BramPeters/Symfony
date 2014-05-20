<?php
// src/Cinema/CinemaBundle/Entity/Showing.php

namespace Cinema\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cinema\CinemaBundle\Entity\Repository\ShowingRepository")
 * @ORM\Table(name="showing")
 * @ORM\HasLifecycleCallbacks
 */
class Showing
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\manyToOne(targetEntity="Movie", inversedBy="showings")
     * @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     */
    protected $Movie;

    /**
     * @ORM\manyToOne(targetEntity="Hall", inversedBy="showings")
     * @ORM\JoinColumn(name="hall_id", referencedColumnName="id")
     */
    protected $Hall;

    /**
     * @ORM\Column(type="string")
     */
    protected $startingtime;

    
    /**
     * @ORM\Column(type="integer")
     */
    protected $soldtickets;
    
    /**
     * @ORM\OneToMany(targetEntity="Ticketsale", mappedBy="Showing")
     */
    protected $ticketsales;

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
     * Set startingtime
     *
     * @param \DateTime $startingtime
     * @return Showing
     */
    public function setStartingtime($startingtime)
    {
        $this->startingtime = $startingtime;

        return $this;
    }

    /**
     * Get startingtime
     *
     * @return \DateTime 
     */
    public function getStartingtime()
    {
        return $this->startingtime;
    }    

    /**
     * Set MovieId
     *
     * @param \Cinema\CinemaBundle\Entity\Movie $movieId
     * @return Showing
     */
    public function setMovieId(\Cinema\CinemaBundle\Entity\Movie $movieId = null)
    {
        $this->MovieId = $movieId;

        return $this;
    }

    /**
     * Get MovieId
     *
     * @return \Cinema\CinemaBundle\Entity\Movie 
     */
    public function getMovieId()
    {
        return $this->MovieId;
    }

    /**
     * Set HallId
     *
     * @param \Cinema\CinemaBundle\Entity\Hall $hallId
     * @return Showing
     */
    public function setHallId(\Cinema\CinemaBundle\Entity\Hall $hallId = null)
    {
        $this->HallId = $hallId;

        return $this;
    }

    /**
     * Get HallId
     *
     * @return \Cinema\CinemaBundle\Entity\Hall 
     */
    public function getHallId()
    {
        return $this->HallId;
    }    
   

    /**
     * Set soldtickets
     *
     * @param integer $soldtickets
     * @return Showing
     */
    public function setSoldtickets($soldtickets)
    {
        $this->soldtickets = $soldtickets;

        return $this;
    }

    /**
     * Get soldtickets
     *
     * @return integer 
     */
    public function getSoldtickets()
    {
        return $this->soldtickets;
    }

    /**
     * Set Movie
     *
     * @param \Cinema\CinemaBundle\Entity\Movie $movie
     * @return Showing
     */
    public function setMovie(\Cinema\CinemaBundle\Entity\Movie $movie = null)
    {
        $this->Movie = $movie;

        return $this;
    }

    /**
     * Get Movie
     *
     * @return \Cinema\CinemaBundle\Entity\Movie 
     */
    public function getMovie()
    {
        return $this->Movie;
    }

    /**
     * Set Hall
     *
     * @param \Cinema\CinemaBundle\Entity\Hall $hall
     * @return Showing
     */
    public function setHall(\Cinema\CinemaBundle\Entity\Hall $hall = null)
    {
        $this->Hall = $hall;

        return $this;
    }

    /**
     * Get Hall
     *
     * @return \Cinema\CinemaBundle\Entity\Hall 
     */
    public function getHall()
    {
        return $this->Hall;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ticketsales = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ticketsales
     *
     * @param \Cinema\CinemaBundle\Entity\Ticketsale $ticketsales
     * @return Showing
     */
    public function addTicketsale(\Cinema\CinemaBundle\Entity\Ticketsale $ticketsales)
    {
        $this->ticketsales[] = $ticketsales;

        return $this;
    }

    /**
     * Remove ticketsales
     *
     * @param \Cinema\CinemaBundle\Entity\Ticketsale $ticketsales
     */
    public function removeTicketsale(\Cinema\CinemaBundle\Entity\Ticketsale $ticketsales)
    {
        $this->ticketsales->removeElement($ticketsales);
    }

    /**
     * Get ticketsales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTicketsales()
    {
        return $this->ticketsales;
    }
}
