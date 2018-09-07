<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        /*
        $parameter_bag  = $this->container->get('parameter_bag');
        $router         = $this->container->get('router');
        $http_kernel    = $this->container->get('http_kernel');
        $request_stack  = $this->container->get('request_stack');
        $router         = $this->container->get('router');
        $serializer     = $this->container->get('serializer');
        $session        = $this->container->get('session');
        $twig           = $this->container->get('twig');

        dump($parameter_bag);
        dump($router);
        dump($http_kernel);
        dump($request_stack);
        dump($router);
        dump($serializer);
        dump($session);
        dump($twig);
        die();
        */

        return $this->render('/homepage/base.html.twig', [
            'data' => 'Koda is here :)',
        ]);
    }

}