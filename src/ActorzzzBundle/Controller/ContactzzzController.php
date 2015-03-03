<?php


namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ActorzzzBundle\Entity\Formulaire;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ContactzzzController extends Controller
{
    public function indexAction()
    {
       return $this->render('ActorzzzBundle:ContactView:Contact.html.twig');

    }
    
    public function newAction(Request $request){
    
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('ROLE_USER')) {
         // Sinon on déclenche une exception « Accès interdit »
         throw new AccessDeniedException('Accès limité aux membres.');
        }

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
	
	/*public function messageAction(){
	
    $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('charlie.Marechal53@gmail.fr')
        ->setTo('cmarechal53@hotmail.fr')
        ->setBody($this->renderView('ActorzzzBundle:ContactView:email.html.twig'))
    ;
    $this->get('mailer')->send($message);

    return $this->render('ActorzzzBundle:ContactView:email.html.twig');
	}
	*/
	
}
?>