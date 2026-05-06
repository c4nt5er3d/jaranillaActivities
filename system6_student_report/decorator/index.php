<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$report = new StarDecorator(
    new BorderDecorator(
        new CommentDecorator(new BasicReport("Daisy Miller", "A"), "Excellent work!")
    )
);

$report->display();
