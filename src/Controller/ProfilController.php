<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('profil/profil.html.twig', [
            'categorie' => $repository->findAll(),
        ]);
    }
}
