<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create
        for ($i = 0; $i < 100; $i++) {
            $property= new Property();
            $property
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}