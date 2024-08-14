<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category/id", name="app__ategory")
     */
    public function index(int $id): Response
    {
        return $this->render('Сategory/index.html.twig', [
            'controller_name' => 'СategoryController',
        ]);
    }
}
