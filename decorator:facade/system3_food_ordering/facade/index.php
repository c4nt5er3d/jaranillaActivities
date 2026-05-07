<?php
/**
 * Client-side script to demonstrate the Facade pattern for food ordering.
 * The client uses the FoodOrderFacade to place an order without needing to know about the complex subsystems.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Use the facade to order a Burger
$facade = new FoodOrderFacade();
$facade->orderFood("Burger");
