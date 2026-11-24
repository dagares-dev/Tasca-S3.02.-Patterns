<?php
declare(strict_types=1);

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();
$tigger3 = Tigger::getInstance();

$tigger1->roar();
$tigger1->roar();
$tigger2->roar();
$tigger3->roar();
$tigger3->roar();

echo "How many rugits? " . $tigger1->getCounter() . PHP_EOL;