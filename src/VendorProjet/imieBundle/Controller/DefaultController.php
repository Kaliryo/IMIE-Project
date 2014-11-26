<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VendorProjetimieBundle:Default:index.html.twig', array('name' => $name));
    }
}
