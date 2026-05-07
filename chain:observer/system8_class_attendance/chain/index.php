<?php

header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
});

// Create handlers
$studentExists = new StudentExistsHandler();
$schedule = new ScheduleHandler();
$duplicate = new DuplicateHandler();

// Build chain
$studentExists->setNext($schedule)->setNext($duplicate);

// Sample requests
$requests = [
    ['studentId' => 'S101', 'inSession' => true],  // Should pass
    ['studentId' => 'S999', 'inSession' => true],  // Fails: Student doesn't exist
    ['studentId' => 'S102', 'inSession' => true],  // Fails: Duplicate
    ['studentId' => 'S103', 'inSession' => false], // Fails: Not in session
];

foreach ($requests as $index => $request) {
    echo "Processing Request #" . ($index + 1) . " for Student: " . $request['studentId'] . PHP_EOL;
    $result = $studentExists->handle($request);
    echo "Final Result: " . ($result ? "SUCCESS" : "FAILED") . PHP_EOL;
    echo str_repeat('-', 40) . PHP_EOL;
}
