<?php

namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ActorzzzController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:ActeurView:Actorzzz.html.twig');

    }
}
