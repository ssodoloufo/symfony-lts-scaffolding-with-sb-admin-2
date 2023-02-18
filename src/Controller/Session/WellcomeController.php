<?php

namespace App\Controller\Session;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WellcomeController extends AbstractController {
    /**
     * @Route("/", name="app.wellcome")
     */
    public function index(): Response {
        return $this->render('wellcome.html.twig', [
            'controller_name' => 'WellcomeController',
        ]);
    }
}
