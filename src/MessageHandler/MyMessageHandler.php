<?php

namespace App\MessageHandler;

use App\Message\MyMessage;

class MyMessageHandler
{
    public function __invoke(MyMessage $message)
    {
        foreach ($message->getUsers() as $user) {
            echo "Send notif to "  . $user . "\n";
        }
    }
}