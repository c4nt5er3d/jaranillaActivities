<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$facade = new ReportFacade();
echo "--- Simple Report ---" . PHP_EOL;
$facade->generateSimpleReport("Charlie Brown", "B+");
echo PHP_EOL . "--- Fancy Report ---" . PHP_EOL;
$facade->generateFancyReport("Charlie Brown", "B+", "Great improvement!");
