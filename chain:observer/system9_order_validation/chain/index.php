<?php

header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
});

// Create handlers
$stock = new StockHandler();
$payment = new PaymentHandler();
$logistics = new LogisticsHandler();

// Build chain
$stock->setNext($payment)->setNext($logistics);

// Sample orders
$orders = [
    [
        'orderId' => 'ORD001',
        'items' => ['item1' => 2, 'item3' => 1],
        'total' => 150.00,
        'balance' => 200.00,
        'zipCode' => '1234'
    ], // SUCCESS
    [
        'orderId' => 'ORD002',
        'items' => ['item2' => 1],
        'total' => 50.00,
        'balance' => 100.00,
        'zipCode' => '1234'
    ], // Fails Stock
    [
        'orderId' => 'ORD003',
        'items' => ['item1' => 1],
        'total' => 100.00,
        'balance' => 50.00,
        'zipCode' => '1234'
    ], // Fails Payment
    [
        'orderId' => 'ORD004',
        'items' => ['item3' => 1],
        'total' => 30.00,
        'balance' => 100.00,
        'zipCode' => '9999'
    ], // Fails Logistics
];

foreach ($orders as $index => $order) {
    echo "Validating Order: " . $order['orderId'] . PHP_EOL;
    $result = $stock->handle($order);
    echo "Final Result: " . ($result ? "VALID" : "INVALID") . PHP_EOL;
    echo str_repeat('-', 40) . PHP_EOL;
}
