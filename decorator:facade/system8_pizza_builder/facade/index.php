<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$pizzaFacade = new PizzaFacade();
$pizzaFacade->makePepperoniMushroomPizza();
