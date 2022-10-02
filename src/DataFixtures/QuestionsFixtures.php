<?php

namespace App\DataFixtures;

use App\Entity\Questions;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuestionsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $question = new Questions();
        $question->setIdCategorie(rand(1,11));
        $question->setQuestion('');
        $manager->persist($question);
        $manager->flush();
    }
}
