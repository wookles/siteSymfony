<?php

namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MemberzzzController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:MembreView:Membre.html.twig');

    }
}
