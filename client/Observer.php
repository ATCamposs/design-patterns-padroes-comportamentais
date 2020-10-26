<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Observer\User;
use Src\Observer\UserObserver;

try {
    $observer = new UserObserver();

    $user = new User();
    $user->attach($observer);
    $user->setEmail('foo@bar.com');

    $user = new User();
    $user->attach($observer);
    $user->setEmail('foo2@bar.com');

    /*
    $user = new User();
    $user->attach($observer);
    $user->setEmail('foo@bar.com');
*/
    var_dump($observer->getChangedUsers());
} catch (Exception $e) {
    echo $e->getMessage();
}
