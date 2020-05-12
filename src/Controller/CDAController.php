<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CDAController extends AbstractController
{
    
    public function index()
    {
        return $this->render('cda/index.html.twig', [
            'controller_name' => 'CDAController',
        ]);
    }
}
