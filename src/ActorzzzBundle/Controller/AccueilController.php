<?php

namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:AccueilView:Accueil.html.twig');

    }
}