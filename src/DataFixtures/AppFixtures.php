<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Evenement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create('fr_FR');

        $user = new User();
        $user->setEmail('user@test.com')
            ->setName($faker->firstName());

        $password = $this->encoder->encodePassword($user, 'password');
        $user->setPassword($password);
        $manager->persist($user);

        $manager->flush();

        //creation des evenements
        for ($i = 0; $i < 10; $i++) {
            $evenement = new Evenement();
            $evenement->setNom($faker->firstName())
                ->setDescription($faker->text(350))
                ->setImage('/img/bg.jpg');
            $manager->persist($evenement);
        }
        $manager->flush();
    }
}
