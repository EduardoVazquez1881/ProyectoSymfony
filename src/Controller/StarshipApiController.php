<?php
 
namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/starships')]
class StarshipApiController extends AbstractController{

    #[Route('', methods: ['GET'])] #No es necesario poner el nombre de la ruta, si la ruta de pone arriba de la clase
    public function get_Collection(StarshipRepository $repository): Response{        
        /*dd($repository); puedo usar dd para saber si funciona lo que estoy poniendo*/
        $starships = $repository->findAll();
        /*return new Response(json_encode($starships)); se puede retornar */
        return $this -> json($starships);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response{
        $starships = $repository -> find($id);

        if (!$starships){
            throw $this -> createNotFoundException("No se encuentra en la base de datos falsa");
        }
        return $this -> json($starships);
    }

}