<?php

/**
 * Abstract class QuizDecorator
 * Base decorator class that maintains a reference to a Quiz component.
 */
abstract class QuizDecorator implements Quiz {
    protected Quiz $decoratedQuiz;

    /**
     * Constructor to wrap an existing Quiz object.
     */
    public function __construct(Quiz $decoratedQuiz) {
        $this->decoratedQuiz = $decoratedQuiz;
    }

    /**
     * Delegates the start action to the wrapped quiz object.
     */
    public function start(): void {
        $this->decoratedQuiz->start();
    }
}
