<?php
/**
 * Client-side script to demonstrate the Decorator pattern.
 * It starts with a basic user profile and dynamically adds a badge and status.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create a basic profile
$profile = new BasicUserProfile("JohnDoe");

// Decorate it with a badge
$profile = new BadgeDecorator($profile, "Pro Gamer");

// Decorate it further with a status
$profile = new StatusDecorator($profile, "Online");

// Display the final decorated profile description
echo "User Profile: " . $profile->getDescription() . PHP_EOL;
