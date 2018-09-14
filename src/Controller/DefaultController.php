<?php

namespace App\Controller;

use App\Message\MyMessage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;

class DefaultController extends AbstractController
{

    public function index(MessageBusInterface $bus, Request $request)
    {
        $users = ['koda', 'kinai'];
        $message = $request->query->get('message', 'something');

        $bus->dispatch(new MyMessage($message, $users));

        //return new Response('<html><body>OK.</body></html>');
    }

    /**
     * @Route("/message/", name="message")
     */
    public function message(MessageBusInterface $bus, Request $request)
    {
        // dump($bus);

        $users = ['koda', 'kinai'];
        //$message = $request->query->get('message', 'something');
        $message = "Envoie d'un message";
        $bus->dispatch(new MyMessage($message, $users));

        return $this->render('/message/message.html.twig', [
            'data' => 'Send message done :)',
        ]);
    }
}