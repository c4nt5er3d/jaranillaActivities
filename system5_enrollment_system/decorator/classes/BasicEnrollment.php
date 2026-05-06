<?php

/**
 * Class BasicEnrollment
 * Concrete implementation of the EnrollmentProcess.
 * Represents the fundamental enrollment action.
 */
class BasicEnrollment implements EnrollmentProcess {
    /**
     * Performs the basic enrollment initiation.
     * @param string $name
     */
    public function enroll(string $name): void {
        echo "Initiating enrollment for: " . $name . PHP_EOL;
    }
}
