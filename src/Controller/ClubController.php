<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    #[Route('/club/{name}', name: 'name')]
    public function getName($name): Response
    {
        return $this->render('club/name.html.twig', ['name'=>$name]);
    }


    #[Route('/club/get/{nom}', name: 'nom_club')]
    public function getnom($nom): Response
    {
        return $this->render('club/name.html.twig', ['name'=>$nom]);

    }

    #[Route('/club', name: 'app_club')]
    public function index(): Response
    {
        return $this->render('club/list.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }



}
