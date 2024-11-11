<?php

namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController{
    #[Route("/")]
     public function homepage(StarshipRepository $starshipRepository): Response{
        $ships = $starshipRepository->findAll();
        $starshipCount = count($ships);
        $myships = $ships[array_rand($ships)];
    
        $pruebadato = 1234;
         return $this->render('main/homepage.html.twig', [
                'numberOfStarship' => $starshipCount,
                'myShip' => $myships,
                'prueba' => $pruebadato
                
         ]); 

   }
}