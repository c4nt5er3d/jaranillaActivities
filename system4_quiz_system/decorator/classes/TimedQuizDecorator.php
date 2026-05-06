<?php

/**
 * Class TimedQuizDecorator
 * Concrete Decorator that adds timing functionality to a quiz.
 */
class TimedQuizDecorator extends QuizDecorator {
    /**
     * Constructor to initialize the timed quiz decorator.
     */
    public function __construct(Quiz $decoratedQuiz) {
        parent::__construct($decoratedQuiz);
    }

    /**
     * Starts the quiz and adds a timer feature.
     */
    public function start(): void {
        parent::start();
        echo "[Adding Timer: 60 seconds]" . PHP_EOL;
    }
}
