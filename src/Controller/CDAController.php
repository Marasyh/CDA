<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CDAController extends AbstractController
{
    /**
     * @Route("/CDAController", name="index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('cda/index.html.twig', [
            'controller_name' => 'CDAController',
        ]);
    }
}
