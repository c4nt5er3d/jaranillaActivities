<?php

/**
 * Class ScoringSystem
 * Subsystem component responsible for calculating and displaying quiz results.
 */
class ScoringSystem {
    /**
     * Displays the score and indicates if the user passed or failed.
     */
    public function calculateAndShow(int $correct): void {
        echo "Score: " . $correct . "/10" . PHP_EOL;
        echo "Result: " . ($correct >= 5 ? "Pass" : "Fail") . PHP_EOL;
    }
}
