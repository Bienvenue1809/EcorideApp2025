<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SearchCovoitController extends AbstractController
{
    #[Route('/search/covoit', name: 'app_search_covoit')]
    public function index(): Response
    {
        return $this->render('search_covoit/index.html.twig', [
            'controller_name' => 'SearchCovoitController',
        ]);
    }
}
