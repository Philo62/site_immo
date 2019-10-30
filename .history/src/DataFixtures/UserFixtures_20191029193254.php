<?php

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function __construct(Userp)
    {
    }

    public function load(ObjectManager $manager)
    {
         $user = new user();
         $user ->setUsername('demo');
         $user ->setPassword('demo');
    

        $manager->flush();
    }
}
