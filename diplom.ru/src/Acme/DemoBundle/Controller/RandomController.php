<?php
/**
 * Created by PhpStorm.
 * User: Klay
 * Date: 28.02.15
 * Time: 1:48
 */

namespace Acme\DemoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RandomController  extends Controller{

    public function indexAction( $limit ){
        $number = rand(1, $limit);
        return $this->render("AcmeDemoBundle:Random:index.html.twig",
            array('number' => $number));
//        return new Response( $responceContent );
    }


}