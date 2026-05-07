<?php
/**
 * Client-side script to demonstrate the Facade pattern for a quiz system.
 * The client uses the QuizFacade to run a quiz session simply.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Use the facade to run the quiz
$quiz = new QuizFacade();
$quiz->runQuiz(["A", "B", "C"], 8);
