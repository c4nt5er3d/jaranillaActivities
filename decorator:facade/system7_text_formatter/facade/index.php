<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$facade = new FormatterFacade();
$msg = "Hello World";
$facade->printPlain($msg);
$facade->printBold($msg);
$facade->printUppercase($msg);
$facade->printBoth($msg);
