<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create subject
$order = new Order("ORD-999");

// Create observers
$customer = new Customer();
$deliveryTeam = new DeliveryTeam();
$inventory = new InventorySystem();

// Attach observers
$order->attach($customer);
$order->attach($deliveryTeam);
$order->attach($inventory);

// Test updates
echo "--- Order Status Notification System ---" . PHP_EOL;
$order->setStatus("Shipped");

echo "\n--- Detaching Inventory System ---" . PHP_EOL;
$order->detach($inventory);
$order->setStatus("Delivered");
