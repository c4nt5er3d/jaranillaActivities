<?php
/**
 * Client-side script to demonstrate food item decoration.
 * We start with a basic food item and dynamically add extra toppings and size upgrades.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create basic burger
$burger = new BasicFoodItem("Burger", 5.99);

// Add cheese as an extra topping
$burger = new ExtraToppingDecorator($burger, "Cheese", 0.50);

// Upgrade to large size
$burger = new LargeSizeDecorator($burger);

// Display final order details
echo "Order: " . $burger->getDescription() . PHP_EOL;
echo "Total Price: $" . $burger->getPrice() . PHP_EOL;
