<?php

header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
});

// Create Subject
$gradeSystem = new GradeSystem();

// Create Observers
$studentObs = new StudentObserver();
$parentObs = new ParentObserver();
$adviserObs = new AdviserObserver();

// Attach Observers
$gradeSystem->attach($studentObs);
$gradeSystem->attach($parentObs);
$gradeSystem->attach($adviserObs);

// Simulate posting grades
$grades = [
    ['S001', 'Mathematics', 92],
    ['S002', 'Science', 88],
];

foreach ($grades as $gradeInfo) {
    $gradeSystem->postGrade($gradeInfo[0], $gradeInfo[1], $gradeInfo[2]);
    echo str_repeat('-', 70) . PHP_EOL;
}

// Detach an observer and test again
echo "Detaching ParentObserver for a university-level student..." . PHP_EOL;
$gradeSystem->detach($parentObs);

$gradeSystem->postGrade('S003', 'History', 85);
