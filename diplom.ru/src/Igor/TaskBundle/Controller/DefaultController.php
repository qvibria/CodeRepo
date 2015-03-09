<?php

namespace Igor\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Igor\TaskBundle\Entity\UserStory;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IgorTaskBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/create", name="new task")
     */
    public function createAction(){
        $us = new UserStory();
        $us->setTitle("Title");
        $us->setImportance(10);
        $us->setInitialEstimate(4);
        $us->setCategory("User Stories");
        $us->setHowToDemo("User go to /task/new and we'll see message about successfull creation");
        $em = $this->getDoctrine()->getManager();

        $em->persist($us);
        $em->flush();
        return new Response("New UserStory created with id " . $us->getId());

    }
}
