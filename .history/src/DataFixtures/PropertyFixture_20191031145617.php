<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i =0; $)
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}