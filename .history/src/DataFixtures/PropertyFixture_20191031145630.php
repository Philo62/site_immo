<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i =0; $i < 100; $i+)
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}