<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/LocalAlertHandler.php';
require_once __DIR__ . '/classes/RegionalAlertHandler.php';
require_once __DIR__ . '/classes/NationalAlertHandler.php';

// Initialize handlers
$local = new LocalAlertHandler();
$regional = new RegionalAlertHandler();
$national = new NationalAlertHandler();

// Setup the chain
$local->setNext($regional)->setNext($national);

// Sample requests
$levels = ['low', 'medium', 'high', 'critical'];

foreach ($levels as $level) {
    echo "Processing Alert Risk Level: {$level}" . PHP_EOL;
    $local->handle($level);
    echo str_repeat('-', 30) . PHP_EOL;
}
