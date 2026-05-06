<?php

/**
 * Class BasicQuiz
 * Concrete Component providing the fundamental quiz implementation.
 */
class BasicQuiz implements Quiz {
    /**
     * Starts a basic quiz session.
     */
    public function start(): void {
        echo "Starting basic quiz..." . PHP_EOL;
    }
}
