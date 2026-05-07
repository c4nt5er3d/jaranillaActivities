<?php

/**
 * Interface Quiz
 * Acts as the base Component in the Decorator pattern for the quiz system.
 */
interface Quiz {
    /**
     * Starts the quiz.
     */
    public function start(): void;
}
