<?php
header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create the handlers.
$keywordHandler = new KeywordHandler();
$reputationHandler = new ReputationHandler();
$manualHandler = new ManualHandler();

// Build the chain.
$keywordHandler->setNext($reputationHandler)->setNext($manualHandler);

// Sample emails.
$emails = [
    "Hello! Just wanted to say hi.",
    "Click here for free money now!",
    "Important message from scammer@badsite.com",
    "This is a very long email that definitely needs manual review because it has a lot of content and we want to make sure it is not spam even though it does not contain any keywords or bad reputation senders.",
];

// Process each email.
foreach ($emails as $email) {
    echo "Processing email: " . substr($email, 0, 50) . (strlen($email) > 50 ? "..." : "") . PHP_EOL;
    $keywordHandler->handle($email);
    echo str_repeat('-', 30) . PHP_EOL;
}
