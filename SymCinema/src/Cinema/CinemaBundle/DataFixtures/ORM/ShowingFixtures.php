<?php
// src/Cinema/CinemaBundle/DataFixtures/ORM/ShowingFixtures.php

namespace Cinema\CinemaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cinema\CinemaBundle\Entity\Showing;
use Cinema\CinemaBundle\Entity\Movie;
use Cinema\CinemaBundle\Entity\Hall;

class ShowingFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $showing = new Showing();
        $showing->setStartingtime('2014-05-06 09:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-1')));
        $showing->setMovieId($manager->merge($this->getReference('movie-2')));
        $showing->setSoldTickets(11);
        $manager->persist($showing);

        $showing = new Showing();
        $showing->setStartingtime('2014-05-07 09:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-2')));
        $showing->setMovieId($manager->merge($this->getReference('movie-3')));
        $showing->setSoldTickets(5);
        $manager->persist($showing);

        $showing = new Showing();
        $showing->setStartingtime('2014-05-06 09:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-2')));
        $showing->setMovieId($manager->merge($this->getReference('movie-2')));
        $showing->setSoldTickets(8);
        $manager->persist($showing);

        $showing = new Showing();
        $showing->setStartingtime('2014-05-06 09:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-3')));
        $showing->setMovieId($manager->merge($this->getReference('movie-5')));
        $showing->setSoldTickets(1);
        $manager->persist($showing);
        
        $showing = new Showing();
        $showing->setStartingtime('2014-05-08 09:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-3')));
        $showing->setMovieId($manager->merge($this->getReference('movie-6')));
        $showing->setSoldTickets(1);
        $manager->persist($showing);
        
        $showing = new Showing();
        $showing->setStartingtime('2014-05-07 19:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-3')));
        $showing->setMovieId($manager->merge($this->getReference('movie-6')));
        $showing->setSoldTickets(5);
        $manager->persist($showing);
        
        $showing = new Showing();
        $showing->setStartingtime('2014-05-07 09:33:44');
        $showing->setHallId($manager->merge($this->getReference('hall-2')));
        $showing->setMovieId($manager->merge($this->getReference('movie-6')));
        $showing->setSoldTickets(12);
        $manager->persist($showing);

        $manager->flush();
        
        
    }

    public function getOrder()
    {
        return 3;
    }
}