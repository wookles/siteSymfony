<?php

namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContactzzzController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:ContactView:Contact.html.twig');

    }
}
