<?php

namespace Dav\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dav\UserBundle\Entity\User;

class LoadUser implements FixtureInterface{

    public function load(ObjectManager $manager){

        $listeName= array('sarah', 'lea', 'marie');

        foreach($listeName as $name){

            $user= new User();

            $user->setUsername($name);
            $user->setPassword($name);
            $user->setSalt('');
            $user->setRoles(array('ROLE_USER'));

            $manager->persist($user);

        }

        $manager->flush();
    }
}