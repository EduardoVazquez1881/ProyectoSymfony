<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController{
    #[Route("/")]
     public function homepage(): Response{

        $persona = array(
            "nombre" => "Juan",
            "edad" => 30,
            "ciudad" => "Madrid"
        );         
        $pruebadato = 1234;
         return $this->render('main/homepage.html.twig', [
                'pruebadato' => $pruebadato,
                'persona' => $persona,
                
         ]); 

   }
}