<?php

//src/Test/PremierBundle/Controller/AdvertController.php

namespace Test\PremierBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller{

    public function indexAction(){

    $content = $this
        ->get('templating')
        ->render('TestPremierBundle:Advert:index.html.twig', array('nom' => 'Parmenozzz', 'prenom' => 'Damienzzz'));
    return new Response($content);
    }
}
