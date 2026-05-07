<?php

require_once __DIR__ . '/GradeHandler.php';

/**
 * AuthorizationHandler
 * 
 * Checks if the teacher is authorized to submit grades for this student.
 */
class AuthorizationHandler extends GradeHandler
{
    private array $authorizedTeachers = ['T1', 'T2'];

    public function handle(array $submission): bool
    {
        if (!in_array($submission['teacherId'], $this->authorizedTeachers)) {
            echo "Validation Failed: Teacher {$submission['teacherId']} is not authorized to submit grades." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Teacher {$submission['teacherId']} is authorized." . PHP_EOL;
        return parent::handle($submission);
    }
}
