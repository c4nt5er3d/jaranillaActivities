<?php
/**
 * Client-side script to demonstrate character decoration.
 * We start with a basic character and add armor, a sword, and a speed boost dynamically.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create base character
$warrior = new BasicCharacter();

// Add enhancements using decorators
$warrior = new ArmorDecorator($warrior);
$warrior = new SwordDecorator($warrior);
$warrior = new SpeedBoostDecorator($warrior);

// Display results
echo "Warrior Stats: " . $warrior->getStats() . PHP_EOL;
echo "Warrior Power: " . $warrior->getPower() . PHP_EOL;
