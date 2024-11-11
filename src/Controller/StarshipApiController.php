<?php
 
namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StarshipApiController extends AbstractController{

    #[Route('/api/startships')]
    public function get_Collection(StarshipRepository $repository): Response{        
        /*dd($repository); puedo usar dd para saber si funciona lo que estoy poniendo*/
        $starships = $repository->findAll();
        /*return new Response(json_encode($starships)); se puede retornar */
        return $this -> json($starships);
    }

}