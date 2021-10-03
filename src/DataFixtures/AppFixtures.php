<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Factory\RatingProductFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        UserFactory::new()->create([
            'email' => 'cheesefan@example.com' ,
            'roles' => ['ROLE_ADMIN'] ,
            'password' => $this->passwordEncoder->hashPassword(new User() , 'admin') ,
        ]);
        UserFactory::new()::createMany(50);
        RatingProductFactory::createMany(50 , function () {
            return [
                'user' => UserFactory::random() ,
            ];
        });
    }
}
