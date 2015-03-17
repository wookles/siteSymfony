<?php


namespace ActorzzzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use ActorzzzBundle\Entity\Contact;
use ActorzzzBundle\Form\ContactType;

class ContactzzzController extends Controller
{
    public function addAction(Request $request)
    {
        $mail = new Contact();
        $form = $this->get('form.factory')->create(new ContactType(), $mail);
        $message = \Swift_Message::newInstance()
            ->setFrom('damien.parmenon@gmail.fr')
            ->setTo('parmenon.damien@gmail.fr')
            ->setBody($form['message'])
        ;
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Mail bien envoyé.');
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('home', array('id' => $mail->getId())));
        }
        
        return $this->render('ActorzzzBundle:ContactView:Contact.html.twig', array(
          'form' => $form->createView(),
        ));
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