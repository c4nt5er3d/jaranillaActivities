<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/EmailProcessor.php';
require_once __DIR__ . '/classes/SpamLogger.php';
require_once __DIR__ . '/classes/AdminNotifier.php';
require_once __DIR__ . '/classes/UserInbox.php';

// Create the subject
$processor = new EmailProcessor();

// Create and attach observers
$logger = new SpamLogger();
$admin = new AdminNotifier();
$inbox = new UserInbox();

$processor->attach($logger);
$processor->attach($admin);
$processor->attach($inbox);

echo "--- First Email ---" . PHP_EOL;
$processor->processEmail("Welcome to our service!");

echo PHP_EOL . "--- Second Email (Admin detached) ---" . PHP_EOL;
$processor->detach($admin);
$processor->processEmail("Your weekly newsletter.");
