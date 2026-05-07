<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/ProfanityFilter.php';
require_once __DIR__ . '/classes/SpamFilter.php';
require_once __DIR__ . '/classes/DeliveryHandler.php';

// Initialize handlers
$profanity = new ProfanityFilter();
$spam = new SpamFilter();
$delivery = new DeliveryHandler();

// Setup the chain
$profanity->setNext($spam)->setNext($delivery);

// Sample requests
$messages = [
    "Hello everyone!",
    "Hello everyone!", // Should be caught by spam filter
    "This is a toxic message.", // Should be caught by profanity filter
    "Have a great day!",
];

foreach ($messages as $msg) {
    echo "Processing message: \"{$msg}\"" . PHP_EOL;
    $profanity->handle($msg);
    echo str_repeat('-', 30) . PHP_EOL;
}
