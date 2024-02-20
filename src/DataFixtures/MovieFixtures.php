<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The Dark Knight");
        $movie->setDescription("This is the descrpition of the Dark Knight");
        $movie->setReleaseYear(2008);
        $movie->setImagePath("https://media.wired.com/photos/5932cc78b44176024420ef89/master/pass/DKR-16679rC.jpg");

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("Endgame");
        $movie2->setDescription("This is the descrpition of Avengers: Endgame");
        $movie2->setReleaseYear(2019);
        $movie2->setImagePath("https://media1.popsugar-assets.com/files/thumbor/Wk7vKHeGjuKPNNz2teySYyjT-dw=/fit-in/828x1500/filters:format_auto():extract_cover():upscale()/2019/03/25/796/n/1922283/tmp_8FOIjo_dda0ada5717b3912_endgame.jpg");

        $manager->persist($movie2);

        $manager->flush();
    }
}
