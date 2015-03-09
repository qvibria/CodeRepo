<?php

namespace ScrumSecurity\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ScrumSecurityBundle:Default:index.html.twig', array('name' => $name));
    }
}
