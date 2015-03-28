<?php
/**
 * Created by PhpStorm.
 * User: Klay
 * Date: 09.03.15
 * Time: 21:15
 */

namespace ScrumSecurity\Bundle\Controller;


use ScrumSecurity\Bundle\Form\Model\Registration;
use ScrumSecurity\Bundle\Form\Type\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccountController  extends Controller{

    /**
     * @Route("/register")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create')
        ));

        return $this->render(
            "ScrumSecurityBundle:Account:register.html.twig",
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/register/create")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->handleRequest($request);

        if( $form->isValid())
        {
            $regData = $form->getData();
            $em->persist($regData->getUser());
            $em->flush();
            return $this->redirect("/task/list");
        }

        return $this->render(
            "ScrumSecurityBundle:Account:register.html.twig",
            array('form' => $form->createView())
        );
    }

}