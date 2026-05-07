<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create subject
$leaveSystem = new LeaveSystem();

// Create observers
$hr = new HR_System();
$payroll = new Payroll_System();
$calendar = new TeamCalendar();

// Attach observers
$leaveSystem->attach($hr);
$leaveSystem->attach($payroll);
$leaveSystem->attach($calendar);

// Test updates
echo "--- Leave Approval Notification System ---" . PHP_EOL;
$leaveSystem->approveLeave("John Doe", 3);

echo "\n--- Detaching Team Calendar ---" . PHP_EOL;
$leaveSystem->detach($calendar);
$leaveSystem->approveLeave("Jane Smith", 5);
