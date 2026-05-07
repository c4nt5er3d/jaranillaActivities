<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create the chain
$junior = new JuniorDeveloper();
$senior = new SeniorDeveloper();
$lead = new TeamLead();

$junior->setNext($senior)->setNext($lead);

// Test requests
echo "--- Bug Escalation System ---" . PHP_EOL;
echo "Requesting fix for 'low' bug:" . PHP_EOL;
$junior->handle('low');

echo "\nRequesting fix for 'medium' bug:" . PHP_EOL;
$junior->handle('medium');

echo "\nRequesting fix for 'high' bug:" . PHP_EOL;
$junior->handle('high');

echo "\nRequesting fix for 'critical' bug:" . PHP_EOL;
$junior->handle('critical');

echo "\nRequesting fix for 'unknown' bug:" . PHP_EOL;
$junior->handle('unknown');
