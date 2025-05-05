<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom('Sa Bento')->setPrenom('Tony');
        $user->setEmail('pelicarpa@hotmail.fr');
        $user->setPhone('06.62.82.82.36');
        $user->setDateCreate(new \DateTime());
        $user->setDateEdit(new \DateTime());
        $user->setImage('/');
        $user->setPassword();


        $manager->persist($user);

        $manager->flush();
    }
}
