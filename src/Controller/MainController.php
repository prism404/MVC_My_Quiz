<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'MainController',
            'categories' => $repository->findAll(),
        ]);
    }
}
