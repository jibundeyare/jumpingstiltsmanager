<?php

namespace App\DataFixtures;

use App\Entity\State;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StateFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $okState = new State; 
        $okState->setName('OK');
        $manager->persist($okState); 

        $koState = new State; 
        $koState->setName('KO'); 
        $manager->persist($koState); 

        $specialState = new State; 
        $specialState->setName('Spéciale'); 
        $manager->persist($specialState); 
        
        $manager->flush();
    }
}
