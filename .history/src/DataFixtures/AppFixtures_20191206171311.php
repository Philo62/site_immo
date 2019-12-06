<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
// use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;

class AppFixtures extends Fixture
{
    public function load(objectmana $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
