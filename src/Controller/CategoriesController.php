<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/', name: 'app_jsonquizzcat')]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('base.html.twig', [
            'categories' => $repository->findAll(),
        ]);
    }
}
