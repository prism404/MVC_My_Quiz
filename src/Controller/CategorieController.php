<?php
namespace App\Controller;

use App\Entity\Categorie;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CategorieController extends AbstractController
{
    
    #[Route('/categorie', name: 'app_categorie')]
<<<<<<< HEAD
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categorie' => $repository,
=======
    public function index(ManagerRegistry  $doctrine): Response
    {
        $categorie = $doctrine->getRepository(Categorie::class)->findAll();      

        dd($categorie);

        

        return $this->render('categorie/categories.html.twig', [
            'categorie' => $categorie,
>>>>>>> parent of f87b78b... Test
        ]);
    }
}