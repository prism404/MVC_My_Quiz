<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Questions;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionsController extends AbstractController
{
    #[Route('/', name: 'app_questions')]
    public function index(): Response
    {
        return $this->render('questions/index.html.twig', [
            'controller_name' => 'QuestionsController',
        ]);
    }

    #[Route('/test', name: 'app_questions')]
    public function show(Questions $questions, ManagerRegistry $doctrine)
    {
        
        return $this->render('questions/show.html.twig', [
            'questions' => $questions,
        ]);
    }
}
