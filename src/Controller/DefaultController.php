<?php

namespace App\Controller;

use App\Message\MyMessage;
use Symfony\Component\HttpFoundation\Response;
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

        return new Response('<html><body>OK.</body></html>');
    }
}