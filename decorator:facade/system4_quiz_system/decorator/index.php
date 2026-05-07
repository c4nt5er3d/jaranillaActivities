<?php
/**
 * Client-side script to demonstrate quiz decoration.
 * We start with a basic quiz and dynamically add timing and feedback features.
 */

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

// Create basic quiz
$quiz = new BasicQuiz();

// Wrap with decorators to add features
$quiz = new TimedQuizDecorator($quiz);
$quiz = new FeedbackDecorator($quiz);

// Start the enhanced quiz
$quiz->start();
