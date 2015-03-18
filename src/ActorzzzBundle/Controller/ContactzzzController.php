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
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
        }
        $mail = new Contact();
        $form = $this->get('form.factory')->create(new ContactType(), $mail);
        $data = $form->getData();
        $message = \Swift_Message::newInstance()
            ->setSubject('Test envoi')
            ->setFrom('damien.parmenon@gmail.com')
            ->setTo('parmenon.damien@gmail.com')
            ->setBody($data->getMessage())
        ;
        if ($form->isValid()){
            $this->get('mailer')->send($message);
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Mail bien envoyé.');
            return $this->redirect($this->generateUrl('home', array('id' => $mail->getId())));
        }

        $this->get('mailer')->send($message);

        return $this->render('ActorzzzBundle:ContactView:Contact.html.twig', array(
          'form' => $form->createView(),
        ));
    }
	
	/*public function addAction(){
	
    $message = \Swift_Message::newInstance()
        ->setSubject('Test envoi')
        ->setFrom('damien.parmenon@gmail.com')
        ->setTo('parmenon.damien@gmail.com')
        ->setBody('Test')
    ;
    $this->get('mailer')->send($message);

    return $this->render('ActorzzzBundle:ContactView:Contact.html.twig');
	}*/
	
	
}
?>