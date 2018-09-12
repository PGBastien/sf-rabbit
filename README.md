# Messenger component


## Install

Install amqp php module

`apt install php-amqp`


## Require

In applications using Symfony Flex, run this command to install messenger before using it

`composer require messenger`


In order to use Symfony's built-in AMQP transport, you will need the Serializer Component

`composer require symfony/serializer-pack`


## Config

Edit your `.env` file to add :

```
###> symfony/messenger ###
MESSENGER_TRANSPORT_DSN=amqp://guest:guest@localhost:5672/%2f/messages
###< symfony/messenger ###
```

`guest:guest` = user:password

`localhost:5672` = RabbitMQ server

`messages` = exchange & queue