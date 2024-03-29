<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController{
    #[Route('/movies/{title}', name:'movie_title', defaults:['title' => null])]

    public function index($title): Response{
        $movies = ["Avengers: Endgame", "Inception", "Loki", "Black Widow"];

        return $this->render('index.html.twig', array(
            'movies' => $movies,
        ));
    }
}