<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Question;
use App\Repository\CategorieRepository;
use App\Repository\QuestionRepository;
use App\Repository\ReponseRepository;
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
    public function show(Categorie $category, CategorieRepository $repository, int $id, QuestionRepository $questionRepo, Question $questions): Response
    {
        $categorie = $repository->find($id);
        $question = $questionRepo->findBy(['id_categorie' => $category]);

        $reponses = $questions->getReponses();
        foreach ($reponses as $reponse) {
            dump($reponse);
        }
        dd($reponses);

        return $this->render(
            'main/index.html.twig',
            [
                'categorie' => $categorie,
                'categories' => $repository->findAll(),
                'questions' => $question,
            ]
        );
    }
}
