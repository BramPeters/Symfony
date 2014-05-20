<?php
// src/Cinema/CinemaBundle/DataFixtures/ORM/MovieFixtures.php

namespace Cinema\CinemaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cinema\CinemaBundle\Entity\Movie;

class MovieFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $movie1 = new Movie();
        $movie1->setTitle('Dumbo');
        $movie1->setDuration('64');
        $movie1->setCreated('2014-05-05');
        $movie1->setImdblink('http://www.imdb.com/title/tt0033563/');
        $movie1->setImage('Dumbo.jpg');
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle('Sneeuwwitje en de zeven dwergen');
        $movie2->setDuration('83');
        $movie2->setCreated('2014-05-12');
        $movie2->setImdblink('http://www.imdb.com/title/tt0029583/');
        $movie2->setImage('SneeuwwitjeEnDeZevenDwergen.jpg');
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('Assepoester');
        $movie3->setDuration('74');
        $movie3->setCreated('2014-04-12');
        $movie3->setImdblink('http://www.imdb.com/title/tt0042332/');
        $movie3->setImage('Assepoester.jpg');
        $manager->persist($movie3);

        $movie4 = new Movie();
        $movie4->setTitle('Doornroosje');
        $movie4->setDuration('75');
        $movie4->setCreated('2014-05-25');
        $movie4->setImdblink('http://www.imdb.com/title/tt0053285/');
        $movie4->setImage('Doornroosje.jpg');
        $manager->persist($movie4);

        $movie5 = new Movie();
        $movie5->setTitle('Pocahontas');
        $movie5->setDuration('81');
        $movie5->setCreated('2014-05-12');
        $movie5->setImdblink('http://www.imdb.com/title/tt0114148/');
        $movie5->setImage('Pocahontas.jpg');
        $manager->persist($movie5);
        
        $movie6 = new Movie();
        $movie6->setTitle('Belle en het Beest');
        $movie6->setDuration('84');
        $movie6->setCreated('2014-05-05');
        $movie6->setImdblink('http://www.imdb.com/title/tt0101414/');
        $movie6->setImage('BelleEnHetBeest.jpg');
        $manager->persist($movie6);

        $manager->flush();
        
        $this->addReference('movie-1', $movie1);
        $this->addReference('movie-2', $movie2);
        $this->addReference('movie-3', $movie3);
        $this->addReference('movie-4', $movie4);
        $this->addReference('movie-5', $movie5);
        $this->addReference('movie-6', $movie6);
        
    }
     public function getOrder()
    {
        return 1;
    }

}