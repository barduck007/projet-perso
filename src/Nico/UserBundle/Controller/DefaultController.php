<?php

namespace Nico\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction($name)
    {
        return $this->render('NicoUserBundle:Default:accueil.html.twig', array('name' => $name));
    }
}
