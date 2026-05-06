<?php

/**
 * Class IDAssignmentDecorator
 * Concrete decorator that adds ID assignment functionality to the enrollment process.
 */
class IDAssignmentDecorator extends EnrollmentDecorator {
    public function __construct(EnrollmentProcess $process) {
        parent::__construct($process);
    }

    /**
     * Enrolls the student and performs ID assignment.
     * @param string $name
     */
    public function enroll(string $name): void {
        parent::enroll($name);
        echo "Step: Assigning unique ID for " . $name . PHP_EOL;
    }
}
