<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentientLegalController extends AbstractController
{
    #[Route('/mentient/legal', name: 'app_mentient_legal')]
    public function index(): Response
    {
        return $this->render('mentient_legal/index.html.twig', [
            'controller_name' => 'MentientLegalController',
        ]);
    }
}
