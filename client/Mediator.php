<?php

//exemplo base https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/Mediator

require __DIR__ . '/../vendor/autoload.php';

use Src\Mediator\ClientColleague as Client;
use Src\Mediator\DatabaseColleague as Database;
use Src\Mediator\ServerColleague as Server;
use Src\Mediator\Mediator;

$client = new Client();
new Mediator($client, new Server(), new Database());

echo $client->request();
