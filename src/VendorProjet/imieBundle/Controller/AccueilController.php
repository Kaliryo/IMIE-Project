<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VendorProjet\imieBundle\Entity\CV;
use VendorProjet\imieBundle\Form\CVType;

/**
 * CV controller.
 *
 */
class AccueilController extends Controller
{
    /**
     * Accueil page
     *
     * @Route("/home", name="accueil")
     * @Method("GET")
     * @Template("VendorProjetimieBundle:TypeOffer:new.html.twig")
     */
    public function indexAction()
    {
        return $this->render('VendorProjetimieBundle:Accueil:Accueil.html.twig', array());
    }   
}
