<?php


namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ActorzzzBundle\Entity\Formulaire;

class ContactzzzController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:ContactView:Contact.html.twig');

    }
    
    public function newAction(Request $request){
    
    	$formContact = new Formulaire();
    	$formContact->setEmail('email@test.fr');
    	$formContact->setNom('Entrez votre nom');
    	$formContact->setPrenom('Entrez votre prénom');
    	$formContact->setLienImage('lien de votre image');
    	
    	$form = $this->createFormBuilder($formContact)
    		->add('email', 'email')
    		->add('nom', 'text')
    		->add('prenom', 'text')
    		->add('lienImage', 'text')
    		->add('save', 'submit')
    		->getForm();
    		
    	return $this->render('ActorzzzBundle:ContactView:Contact.html.twig', array('form' => $form->createView(),));
	}
}
?>