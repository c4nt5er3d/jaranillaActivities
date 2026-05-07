<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/ChatGroup.php';
require_once __DIR__ . '/classes/ChatMember.php';

$chatGroup = new ChatGroup();

$alice = new ChatMember('Alice');
$bob = new ChatMember('Bob');
$charlie = new ChatMember('Charlie');

$chatGroup->attach($alice);
$chatGroup->attach($bob);
$chatGroup->attach($charlie);

echo "Broadcast 1:" . PHP_EOL;
$chatGroup->broadcast("Welcome to the group!");

echo PHP_EOL . "Broadcast 2 (Bob leaves):" . PHP_EOL;
$chatGroup->detach($bob);
$chatGroup->broadcast("Meeting at 5 PM.");
