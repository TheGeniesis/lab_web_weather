<?php

namespace App\Controller;

use App\Entity\Example;
use App\Repository\ExampleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    /**
     * @Route("/", name="get_example", methods={"GET"})
     */
    public function getExample(ExampleRepository $exampleRepository)
    {
        return $this->render('index.html.twig', [
            'data' => $exampleRepository->findAll(),
        ]);    
    }
}
