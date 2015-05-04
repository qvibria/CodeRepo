<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller {

    public function indexAction($number) {
        $limit = rand(1, $number);
        return $this->render("AcmeDemoBundle:Random:index.html.twig", array("number" => $limit));
    }

}
