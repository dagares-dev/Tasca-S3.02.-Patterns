<?php
declare(strict_types=1);

require_once 'Article.php';
require_once 'Thing.php';
require_once 'Person.php';

$person1 = new Person(
    "Alfred",
    new Wallet(),
    new HouseKeys(),
    new Smartphone(),
    new CarKeys()
);

$person1->leaveHome();