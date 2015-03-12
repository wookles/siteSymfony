// src/ActorzzzBundle/DataFixtures/ORM/LoadMemberzzzData.php

namespace ActorzzzBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ActorzzzBundle\Entity\memberzzz;

class LoadMemberzzzData implements FixtureInterface{
     	/**
     	* {@inheritDoc}
     	*/
	public function load(ObjectManager $manager){
        $memberzzzAdmin = new Memberzzz();
        $memberzzzAdmin->setMemberzzzname('phil');
        $memberzzzAdmin->setPassword('youpi');

        $manager->persist($memberzzzAdmin);
        $manager->flush();
    }
}
