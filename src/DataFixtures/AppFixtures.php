<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    protected $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom('Sa Bento')->setPrenom('Tony');
        $user->setEmail('pelicarpa@hotmail.fr');
        $user->setPhone('06.62.82.82.36');
        $user->setDateCreate(new \DateTime());
        $user->setDateEdit(new \DateTime());
        $user->setImage('/');
        $encoded = $this->encoder->hashPassword($user, '123');
        $user->setPassword($encoded);
        $user->setRoles(['ROLE_USER']);

        $admin = new User();
        $admin->setNom('Aimar')->setPrenom('Amelie');
        $admin->setEmail('amelie@hotmail.fr');
        $admin->setPhone('06.62.82.82.60');
        $admin->setDateCreate(new \DateTime());
        $admin->setDateEdit(new \DateTime());
        $admin->setImage('/');
        $encodedAdmin = $this->encoder->hashPassword($admin, '123');
        $admin->setPassword($encodedAdmin);
        $admin->setRoles(['ROLE_ADMIN']);

        $prospect = new User();
        $prospect->setNom('Houve')->setPrenom('Margot');
        $prospect->setEmail('margot@hotmail.fr');
        $prospect->setPhone('06.62.82.82.50');
        $prospect->setDateCreate(new \DateTime());
        $prospect->setDateEdit(new \DateTime());
        $prospect->setImage('/');
        $encodedProspect = $this->encoder->hashPassword($prospect, '123');
        $prospect->setPassword($encodedProspect);
        $prospect->setRoles(['ROLE_PROSPECT']);

        $maraicher = new User();
        $maraicher->setNom('Supie')->setPrenom('Sandrine');
        $maraicher->setEmail('supie@hotmail.fr');
        $maraicher->setPhone('06.62.82.82.40');
        $maraicher->setDateCreate(new \DateTime());
        $maraicher->setDateEdit(new \DateTime());
        $maraicher->setImage('/');
        $encodedMaraicher = $this->encoder->hashPassword($maraicher, '123');
        $maraicher->setPassword($encodedMaraicher);
        $maraicher->setRoles(['ROLE_MARAICHER']);

        $manager->persist($user);
        $manager->persist($admin);
        $manager->persist($prospect);
        $manager->persist($maraicher);

        $manager->flush();
    }
}
