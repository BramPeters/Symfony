<?php
// src/Cinema/CinemaBundle/DataFixtures/ORM/HallFixtures.php

namespace Cinema\CinemaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cinema\CinemaBundle\Entity\Movie;
use Cinema\CinemaBundle\Entity\Hall;

class HallFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $hall1 = new Hall();
        $hall1->setName('Groene');
        $hall1->setSeats(85);
        $manager->persist($hall1);

        $hall2 = new Hall();
        $hall2->setName('Rode');
        $hall2->setSeats(95);
        $manager->persist($hall2);

        $hall3 = new Hall();
        $hall3->setName('Blauwe');
        $hall3->setSeats(165);
        $manager->persist($hall3);

        $manager->flush();
        
        
        $this->addReference('hall-1', $hall1);
        $this->addReference('hall-2', $hall2);
        $this->addReference('hall-3', $hall3);

    }

    public function getOrder()
    {
        return 2;
    }
}