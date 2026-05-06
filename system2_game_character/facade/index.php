<?php
/**
 * Client-side script to demonstrate the Facade pattern.
 * The client uses a single facade to create a fully equipped warrior character.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Use the facade to simplify character creation
$characterFacade = new GameCharacterFacade();
$characterFacade->createWarrior();
