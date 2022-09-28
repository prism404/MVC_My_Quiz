<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    #[Route('/quizz', name: 'app_quizz')]
    public function index(): Response
    {
        return $this->render('quizz/index.html.twig', array(
        ));
    }

    #[Route('/categories', name: 'app_quizz')]
    public function categories(): Response
    {
        return $this->render('quizz/categories.html.twig');
    }
}
