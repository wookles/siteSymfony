<?php


namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ActorzzzBundle\Entity\FormulaireInscription;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class InscriptionController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:InscriptionView:inscription.html.twig');

    }
    
    public function newAction(Request $request){
    
    	$formInscrip = new FormulaireInscription();
    	$formInscrip->setEmail('email@test.fr');
    	$formInscrip->setNom('Entrez votre nom');
    	$formInscrip->setPrenom('Entrez votre prénom');
    	$formInscrip->setPseudo('Entrez votre pseudo');
    	$formInscrip->setPass('Entrez votre mot de passe');
    	$formInscrip->setLienImage('lien de votre image');
    	
    	$form = $this->createFormBuilder($formInscrip)
    		->add('email', 'email')
    		->add('nom', 'text')
    		->add('prenom', 'text')
    		->add('pseudo', 'text')
    		->add('pass', 'text')
    		->add('lienImage', 'text')
    		->add('save', 'submit')
    		->getForm();
    		
    	return $this->render('ActorzzzBundle:InscriptionView:inscription.html.twig', array('form' => $form->createView(),));
	}
}