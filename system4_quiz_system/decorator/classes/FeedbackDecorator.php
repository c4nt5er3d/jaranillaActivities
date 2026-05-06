<?php

/**
 * Class FeedbackDecorator
 * Concrete Decorator that adds immediate feedback functionality to a quiz.
 */
class FeedbackDecorator extends QuizDecorator {
    /**
     * Constructor to initialize the feedback decorator.
     */
    public function __construct(Quiz $decoratedQuiz) {
        parent::__construct($decoratedQuiz);
    }

    /**
     * Starts the quiz and adds an immediate feedback feature.
     */
    public function start(): void {
        parent::start();
        echo "[Adding Immediate Feedback Mode]" . PHP_EOL;
    }
}
