<?php

/**
 * Class ListAdditionDecorator
 * Concrete decorator that adds the student to the official registry.
 */
class ListAdditionDecorator extends EnrollmentDecorator {
    public function __construct(EnrollmentProcess $process) {
        parent::__construct($process);
    }

    /**
     * Enrolls the student and adds them to the registry.
     * @param string $name
     */
    public function enroll(string $name): void {
        parent::enroll($name);
        echo "Step: Adding " . $name . " to the official registry." . PHP_EOL;
    }
}
