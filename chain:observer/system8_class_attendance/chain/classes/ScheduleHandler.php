<?php

require_once __DIR__ . '/AttendanceHandler.php';

/**
 * ScheduleHandler
 * 
 * Checks if the class is currently in session.
 */
class ScheduleHandler extends AttendanceHandler
{
    public function handle(array $request): bool
    {
        if (!$request['inSession']) {
            echo "Validation Failed: Class for {$request['studentId']} is not in session." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Class is in session." . PHP_EOL;
        return parent::handle($request);
    }
}
