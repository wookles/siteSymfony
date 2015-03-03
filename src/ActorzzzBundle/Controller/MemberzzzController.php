<?php

namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MemberzzzController extends Controller
{
    public function indexAction()
    {
       // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
       if (!$this->get('security.context')->isGranted('ROLE_USER')) {
         // Sinon on déclenche une exception « Accès interdit »
         throw new AccessDeniedException('Accès limité aux membres.');
       }

       return $this->render('ActorzzzBundle:MembreView:Membre.html.twig');

    }
}