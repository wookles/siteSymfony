<?php
// src/ActorzzzBundle/Controller/InscriptionController.php

namespace ActorzzzBundle\Controller;

use ActorzzzBundle\Entity\Membre;
use ActorzzzBundle\Form\MembreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{
  public function addAction(Request $request)
  {
    $inscription = new Membre();
    $form = $this->get('form.factory')->create(new MembreType(), $inscription);

    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($inscription);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Inscription bien enregistrée.');

      return $this->redirect($this->generateUrl('home', array('id' => $inscription->getId())));
    }

    return $this->render('ActorzzzBundle:InscriptionView:inscription.html.twig', array(
      'form' => $form->createView(),
    ));
  }
}