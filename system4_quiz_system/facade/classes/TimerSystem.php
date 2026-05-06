<?php

/**
 * Class TimerSystem
 * Subsystem component responsible for managing the quiz timer.
 */
class TimerSystem {
    /**
     * Starts the countdown for the quiz.
     */
    public function start(): void {
        echo "Timer started. You have 60 seconds." . PHP_EOL;
    }
}
