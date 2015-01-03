<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Job;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$repository = $this->getDoctrine()->getRepository('AppBundle:Job');
    	$jobs = $repository->findAll();
    	
        return $this->render('default/index.html.twig', array('jobs' => $jobs));
    }
}
