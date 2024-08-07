<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class СategoryController extends AbstractController
{
    /**
     * @Route("//ategory", name="app__ategory")
     */
    public function index(): Response
    {
        return $this->render('Сategory/index.html.twig', [
            'controller_name' => 'СategoryController',
        ]);
    }
}
