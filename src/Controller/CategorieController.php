<?php
namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CategorieController extends AbstractController
{
    
    #[Route('/categorie', name: 'app_categorie')]
    public function index(CategorieRepository  $repository): Response
    {
<<<<<<< HEAD
        return $this->render('categorie/index.html.twig', [
            'categorie' => $repository->findAll(),
=======
        $categorie = $doctrine->getRepository(Categorie::class)->findAll();      

        dd($categorie);

        

        return $this->render('categorie/categories.html.twig', [
            'categorie' => $categorie,
>>>>>>> parent of dadc8fa... Creation de la page d'inscription
        ]);
    }
}