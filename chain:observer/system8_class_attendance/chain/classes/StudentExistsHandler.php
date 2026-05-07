<?php

require_once __DIR__ . '/AttendanceHandler.php';

/**
 * StudentExistsHandler
 * 
 * Checks if the student ID is valid.
 */
class StudentExistsHandler extends AttendanceHandler
{
    private array $validStudentIds = ['S101', 'S102', 'S103'];

    public function handle(array $request): bool
    {
        if (!in_array($request['studentId'], $this->validStudentIds)) {
            echo "Validation Failed: Student ID {$request['studentId']} does not exist." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Student ID {$request['studentId']} exists." . PHP_EOL;
        return parent::handle($request);
    }
}
