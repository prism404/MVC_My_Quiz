<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizzController extends AbstractController
{
    #[Route('/', name: 'app_quizz')]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'QuizzController',
            'categories' => $repository->findAll(),
        ]);
    }
}
