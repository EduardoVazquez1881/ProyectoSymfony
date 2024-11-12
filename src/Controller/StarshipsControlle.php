<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarshipsControlle extends AbstractController
{
    #[Route('/starships/{id<\d+>}', name: 'app_starships_show')]
    public function show($id, StarshipRepository $repository): Response
    {
        $ship = $repository -> find($id);
        if (!$ship){
            throw $this -> createNotFoundException("No se encuentra la id en la base de datos");
        }
        return $this->render('starships/show.html.twig', [
            'ship' => $ship
        ]);
    }
}