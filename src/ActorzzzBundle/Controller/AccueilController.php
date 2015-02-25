<?php

namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ActorzzzBundle:AccueilView:index.html.twig', array('name' => $name));
    }
}