<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Twig\Environment;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig', ['number' => $number]);
    }
}