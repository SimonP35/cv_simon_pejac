<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\Provider\DataProvider;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        // Notre fournisseur de données, ajouté à Faker
        $faker->addProvider(new DataProvider());

        // 3 users "en dur" : USER, ADMIN

        $usersList = [];

        $user = new User();
        $user
        ->setEmail('simon.pejac@gmail.com')
        ->setFirstname('Simon')
        ->setLastname('PEJAC')
        ->setDateOfBirth('1986-04-24 00:00:00')
        // Mot de passe hasher via "bin/console security:hash-password"
        ->setPassword('$2y$13$1SfjZhJP7GVWF7BQb6RRT.tRR5Od7.QiEYv5qY5o2g5CAX2yUeDgC')
        ->setAddress('6, chemin de la haie longue 35230 ORGERES')
        ->setSituation('Marié, 3 enfants')
        ->setLicence('Permis B');

        // TODO : S'occuper de createdAt avec un  

        $usersList[] = $user;

        $manager->persist($user);
        $manager->persist($admin);

        // 10 Users
        for ($i = 1; $i <= 10; $i++ ) {

            $rolesList = [];
            $rolesList[] = $faker->roleName();

            $user = new User();
            $user
            ->setEmail($faker->unique->email())
            ->setPassword($this->passwordHasher->hashPassword(
                $user, $faker->unique->password()
            ))
            ->setRoles($rolesList)
            ->setNickname($faker->unique->lastname());

            $usersList[] = $user;

            $manager->persist($user);
        }

        // 15 Games en cours
        for ($i = 1; $i <= 15; $i++ ) {

            $game = $this->gameInit->setGame($usersList[array_rand($usersList)]);

            $manager->persist($game);
        }

        $gamesList = [];

        // 15 Games terminées
        for ($i = 1; $i <= 15; $i++ ) {

            $game = new Game();

            // On appelle le service EndGame pour créer une partie terminée
            $game = $this->gameEnd->endGame($game, $usersList[array_rand($usersList)]);

            $game
            ->setScore(mt_rand(0, 1800))
            ->setScenario(1)
            ->setEndedAt($faker->dateTimeBetween('-10 years', 'now'));

            $gamesList[] = $game;

            $manager->persist($game);
        }

        // 50 Comments
        for ($i = 1; $i <= 50; $i++ ) {

            $comment = new Comment();

            $comment
            ->setContent($faker->paragraph(5))
            ->setRating(mt_rand(1, 5))
            ->setUser($usersList[array_rand($usersList)])
            ->setGame($gamesList[array_rand($gamesList)]);

            $manager->persist($comment);
        }

        $manager->flush();
    }
}
