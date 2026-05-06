<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$basicPizza = new Mushroom(new Pepperoni(new Cheese(new PlainPizza())));
echo "Ingredients: " . $basicPizza->getDescription() . PHP_EOL;
echo "Total Cost: " . $basicPizza->getCost() . PHP_EOL;
