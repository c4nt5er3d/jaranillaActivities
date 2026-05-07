<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/StaffApproval.php';
require_once __DIR__ . '/classes/ManagerApproval.php';
require_once __DIR__ . '/classes/OwnerApproval.php';

// Initialize handlers
$staff = new StaffApproval();
$manager = new ManagerApproval();
$owner = new OwnerApproval();

// Setup the chain
$staff->setNext($manager)->setNext($owner);

// Sample requests
$discounts = [5, 15, 45, 10, 30];

foreach ($discounts as $discount) {
    echo "Requesting approval for {$discount}% discount:" . PHP_EOL;
    $staff->handle($discount);
    echo str_repeat('-', 30) . PHP_EOL;
}
