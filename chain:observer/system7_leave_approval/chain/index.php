<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create the chain
$supervisor = new Supervisor();
$manager = new Manager();
$director = new Director();

$supervisor->setNext($manager)->setNext($director);

// Test requests
echo "--- Leave Approval Hierarchy ---" . PHP_EOL;
echo "Requesting 1 day leave:" . PHP_EOL;
$supervisor->handle(1);

echo "\nRequesting 4 days leave:" . PHP_EOL;
$supervisor->handle(4);

echo "\nRequesting 10 days leave:" . PHP_EOL;
$supervisor->handle(10);
