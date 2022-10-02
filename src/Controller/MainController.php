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
            'categories' => $repository->findAll(),
        ]);
    }

    #[Route('/jsonquizz/{id}', name: 'app_quizzlist')]
    public function show(CategorieRepository $repository, int $id): Response
    {
        $categorie = $repository->find($id);

        return $this->render(
            'main/index.html.twig',
            [
                'categorie' => $categorie,
                'categories' => $repository->findAll(),
            ]
        );
    }
}
