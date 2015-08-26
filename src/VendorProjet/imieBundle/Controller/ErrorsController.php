<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Error controller.
 *
 */
class ErrorsController extends Controller
{
    /**
     * Error page bad right to acces
     *
     * @Route("/badPermission", name="bad_permission")
     * @Method("GET")
     * @Template("VendorProjetimieBundle:TypeOffer:new.html.twig")
     */
    public function indexAction()
    {
        return $this->render('VendorProjetimieBundle:Errors:BadPermission.html.twig', array()); 
    }   
}
