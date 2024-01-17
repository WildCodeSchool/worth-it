<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecommendationController extends AbstractController
{

    #[Route('/product', name: 'app_recommendation')]
    public function index(): Response
    {
        return $this->render('/recommendation.html.twig');
    }

}
