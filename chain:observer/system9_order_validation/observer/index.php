<?php

header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
});

// Create Subject
$orderValidation = new OrderValidation();

// Create Observers
$warehouse = new WarehouseSystem();
$billing = new BillingSystem();
$shipping = new ShippingSystem();

// Attach Observers
$orderValidation->attach($warehouse);
$orderValidation->attach($billing);
$orderValidation->attach($shipping);

// Simulate validated orders
$orders = ['ORD-1001', 'ORD-1002'];

foreach ($orders as $orderId) {
    $orderValidation->validateOrder($orderId);
    echo str_repeat('-', 60) . PHP_EOL;
}

// Detach an observer and test again
echo "Detaching ShippingSystem for a digital-only order..." . PHP_EOL;
$orderValidation->detach($shipping);

$orderValidation->validateOrder('ORD-1003');
