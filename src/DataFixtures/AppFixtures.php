<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++)
        {
          $article = new Article();
          $article->setTitle("Titre de l'article n $i")
                    ->setImage("http://placehold.it/350*150");
          $manager->persist($article);
        }

        $manager->flush();
    }
}
