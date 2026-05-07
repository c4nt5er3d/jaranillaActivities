<?php

/**
 * Client-side script demonstrating the Decorator Pattern in an enrollment system.
 * Dynamically adds ID assignment and registry addition steps to the basic enrollment process.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Build a decorated enrollment process
$fullEnrollment = new ListAdditionDecorator(
    new IDAssignmentDecorator(new BasicEnrollment())
);

// Execute the process
$fullEnrollment->enroll("Bob Smith");
