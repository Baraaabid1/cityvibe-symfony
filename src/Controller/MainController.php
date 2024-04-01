<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/admin', name: 'app_Admin_main')]
    public function indexAdmin(): Response
    {
        return $this->render('main\indexAdmin.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
