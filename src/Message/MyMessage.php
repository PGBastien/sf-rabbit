<?php

namespace App\Message;


class MyMessage
{
    public function __construct(string $message, array $users)
    {
        $this->message = $message;
        $this->users   = $users;
    }

    // getters
}