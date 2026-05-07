<?php
/**
 * Client-side script to demonstrate the Facade pattern.
 * The client uses the Facade to interact with multiple subsystem components through a single interface.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Use the facade to display the full profile without interacting with subsystems directly
$facade = new UserProfileFacade();
$facade->displayFullProfile("JohnDoe", "Pro Gamer", true);
