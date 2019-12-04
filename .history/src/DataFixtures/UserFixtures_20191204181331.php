<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
Compile Error: Declaration of App\DataFixtures\AppFixtures::load(Doctrine\O  
!!    RM\EntityManagerInterface $manager) must be compatible with Doctrine\Common  
!!    \DataFixtures\FixtureInterface::load(Doctrine\Common\Persistence\ObjectMana  
!!    ger $manager)
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture 
{
    /**
     * @var UserPasswordEncoderInterface
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user ->setUsername('demo');
        $user ->setPassword($this->encoder->encodePassword($user,'demo'));
        $manager->persist($user);
        $manager->flush();
    }
}
