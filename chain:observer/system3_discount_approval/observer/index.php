<?php
header('Content-Type: text/plain; charset=UTF-8');

require_once __DIR__ . '/classes/DiscountSystem.php';
require_once __DIR__ . '/classes/AccountingDept.php';
require_once __DIR__ . '/classes/CustomerNotification.php';
require_once __DIR__ . '/classes/InventorySystem.php';

$discountSystem = new DiscountSystem();

$accounting = new AccountingDept();
$customers = new CustomerNotification();
$inventory = new InventorySystem();

$discountSystem->attach($accounting);
$discountSystem->attach($customers);
$discountSystem->attach($inventory);

echo "Discount update 1:" . PHP_EOL;
$discountSystem->updateDiscount(15.0);

echo PHP_EOL . "Discount update 2 (Inventory system detached):" . PHP_EOL;
$discountSystem->detach($inventory);
$discountSystem->updateDiscount(25.0);
