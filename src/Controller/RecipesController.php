<?php

namespace App\Controller;

use App\Entity\Catalog;
use App\Repository\CatalogRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipesController extends AbstractController
{
    /**
     * @Route("/recipes", name="app_recipes")
     */
    public function index(CatalogRepository $catalogRepository, EntityManagerInterface $em): Response
    {


//        $catalog = (new Catalog())
//            ->setName('Test1')
//            ->setDate(new \DateTime(date("Y-m-d H:i:s")));
//        $em->persist($catalog);
//        $em->flush();

echo "<pre>";
        print_r($catalogRepository->findAll());

die();

        return $this->render('recipes/index.html.twig', [
            'controller_name' => 'RecipesController',
        ]);
    }
}
