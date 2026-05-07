<?php

header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
});

// Create handlers
$range = new RangeValidator();
$auth = new AuthorizationHandler();
$final = new FinalSubmissionHandler();

// Build chain
$range->setNext($auth)->setNext($final);

// Sample grade submissions
$submissions = [
    [
        'studentId' => 'S001',
        'teacherId' => 'T1',
        'grade' => 85
    ], // SUCCESS
    [
        'studentId' => 'S002',
        'teacherId' => 'T1',
        'grade' => 105
    ], // Fails Range
    [
        'studentId' => 'S003',
        'teacherId' => 'T3',
        'grade' => 90
    ], // Fails Auth
];

foreach ($submissions as $index => $submission) {
    echo "Processing Submission for Student: " . $submission['studentId'] . PHP_EOL;
    $result = $range->handle($submission);
    echo "Final Result: " . ($result ? "SUBMITTED" : "REJECTED") . PHP_EOL;
    echo str_repeat('-', 40) . PHP_EOL;
}
