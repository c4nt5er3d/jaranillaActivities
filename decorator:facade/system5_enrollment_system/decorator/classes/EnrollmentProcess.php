<?php

/**
 * Interface EnrollmentProcess
 * Defines the contract for all enrollment components and decorators.
 */
interface EnrollmentProcess {
    /**
     * Executes the enrollment process for a given student name.
     * @param string $name
     */
    public function enroll(string $name): void;
}
