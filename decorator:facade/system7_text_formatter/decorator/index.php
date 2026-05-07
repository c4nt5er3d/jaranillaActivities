<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

echo "--- Decorator Combinations ---" . PHP_EOL;
$myText = new BoldDecorator(new UppercaseDecorator(new PlainText("design patterns")));
echo "Bold + Uppercase: " . $myText->format() . PHP_EOL;

$boldOnly = new BoldDecorator(new PlainText("hello"));
echo "Bold only: " . $boldOnly->format() . PHP_EOL;
