<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {$nom="aicha";
        $liste=[
            "nom"=>"fares",
            "nom2"=> "sophia",
            "nom3"=>"yoel"
        ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'nom'=>$nom,
            'liste'=>$liste
        ]);
    }
}
