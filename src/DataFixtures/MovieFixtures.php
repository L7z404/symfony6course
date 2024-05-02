<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Creating data to load into database
        $movie = new Movie();
        $movie->setTitle('Inception');
        $movie->setReleaseYear(2010);
        $movie->setDescription('Dream inside a dream');
        $movie->setImagePath('https://images7.alphacoders.com/833/833508.jpg');
        
        //Adding data to pívot table movie_actor
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);
        //Creating data to load into database
        //---------------------------------------------------------
        $movie2 = new Movie();
        $movie2->setTitle('Black Clover');
        $movie2->setReleaseYear(2015);
        $movie2->setDescription('Protagonist without any magic power');
        $movie2->setImagePath('https://st4.depositphotos.com/14715994/39800/v/450/depositphotos_398000874-stock-illustration-magic-ancient-viking-art-deco.jpg');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);


        //Make changes
        $manager->flush();

    }
}
