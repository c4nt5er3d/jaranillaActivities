<?php

header('Content-Type: text/plain; charset=UTF-8');

spl_autoload_register(function ($class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
});

// Create Subject
$attendanceSystem = new AttendanceSystem();

// Create Observers
$studentRecord = new StudentRecord();
$parentNotification = new ParentNotification();
$adviserDashboard = new AdviserDashboard();

// Attach Observers
$attendanceSystem->attach($studentRecord);
$attendanceSystem->attach($parentNotification);
$attendanceSystem->attach($adviserDashboard);

// Simulate marking attendance
$students = ['John Doe', 'Jane Smith', 'Alice Johnson'];

foreach ($students as $student) {
    $attendanceSystem->markAttendance($student);
    echo str_repeat('-', 50) . PHP_EOL;
}

// Detach an observer and test again
echo "Detaching ParentNotification..." . PHP_EOL;
$attendanceSystem->detach($parentNotification);

$attendanceSystem->markAttendance('Bob Brown');
