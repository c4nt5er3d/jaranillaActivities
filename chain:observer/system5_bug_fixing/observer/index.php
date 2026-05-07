<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create subject
$bugTracker = new BugTracker();

// Create observers
$qaTeam = new QATeam();
$devTeam = new DevTeam();
$pm = new ProjectManager();

// Attach observers
$bugTracker->attach($qaTeam);
$bugTracker->attach($devTeam);
$bugTracker->attach($pm);

// Test updates
echo "--- Bug Tracker Notification System ---" . PHP_EOL;
$bugTracker->updateBugReport("BUG-101", "Fixed");

echo "\n--- Detaching Dev Team ---" . PHP_EOL;
$bugTracker->detach($devTeam);
$bugTracker->updateBugReport("BUG-102", "Reopened");
