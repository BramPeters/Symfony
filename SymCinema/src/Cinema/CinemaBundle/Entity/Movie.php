<?php
// src/Cinema/CinemaBundle/Entity/Blog.php

namespace Cinema\CinemaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Cinema\CinemaBundle\Entity\Repository\MovieRepository")
 * @ORM\Table(name="Movie")
 * @ORM\HasLifecycleCallbacks()
 */

class Movie
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
    /**
     * @ORM\Column(type="string", length=3)
     */
    protected $duration;

    /**
     * @ORM\Column(type="string")
     */
    protected $created;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $imdblink;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $image;
    
    /**
     * @ORM\OneToMany(targetEntity="Showing", mappedBy="Movie")
     */
    protected $showings;

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
     * Set title
     *
     * @param string $title
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Movie
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set imdblink
     *
     * @param string $imdblink
     * @return Movie
     */
    public function setImdblink($imdblink)
    {
        $this->imdblink = $imdblink;

        return $this;
    }

    /**
     * Get imdblink
     *
     * @return string 
     */
    public function getImdblink()
    {
        return $this->imdblink;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return Movie
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Movie
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
    
    
    public function __construct()
    {
        $this->showings = new ArrayCollection();

    }

    /**
     * Add showings
     *
     * @param \Cinema\CinemaBundle\Entity\Showing $showings
     * @return Movie
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
