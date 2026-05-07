<?php

require_once __DIR__ . '/AttendanceHandler.php';

/**
 * DuplicateHandler
 * 
 * Checks if the student has already been marked present.
 */
class DuplicateHandler extends AttendanceHandler
{
    private array $alreadyMarked = ['S102'];

    public function handle(array $request): bool
    {
        if (in_array($request['studentId'], $this->alreadyMarked)) {
            echo "Validation Failed: Student {$request['studentId']} is already marked present." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Student {$request['studentId']} not yet marked." . PHP_EOL;
        return parent::handle($request);
    }
}
