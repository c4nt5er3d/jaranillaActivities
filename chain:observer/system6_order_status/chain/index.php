<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create the chain
$processing = new ProcessingHandler();
$shipping = new ShippingHandler();
$delivery = new DeliveryHandler();

$processing->setNext($shipping)->setNext($delivery);

// Test requests
echo "--- Order Status Processing Chain ---" . PHP_EOL;
echo "Status: 'ordered'" . PHP_EOL;
$processing->handle('ordered');

echo "\nStatus: 'processed'" . PHP_EOL;
$processing->handle('processed');

echo "\nStatus: 'shipped'" . PHP_EOL;
$processing->handle('shipped');

echo "\nStatus: 'delivered'" . PHP_EOL;
$processing->handle('delivered');
