<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
     private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }
     
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('support@limeointeractive.com');
        $user->setFirstname('Limeo');
        $user->setLastname('Interactive');
        $user->setRoles(array("ROLE_USER", "ROLE_SUPER_ADMIN", "ROLE_ALLOWED_TO_SWITCH"));
        $user->setIsActive(1);
        $user->setLastActivity(new \DateTime());
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());

         $user->setPassword($this->passwordEncoder->encodePassword(
             $user,
             'Limeo@973'
         ));

        $manager->persist($user);
        $manager->flush();
    }
}
