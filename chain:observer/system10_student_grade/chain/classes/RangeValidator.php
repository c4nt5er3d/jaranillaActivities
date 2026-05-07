<?php

require_once __DIR__ . '/GradeHandler.php';

/**
 * RangeValidator
 * 
 * Checks if the grade is within the valid range (0-100).
 */
class RangeValidator extends GradeHandler
{
    public function handle(array $submission): bool
    {
        if ($submission['grade'] < 0 || $submission['grade'] > 100) {
            echo "Validation Failed: Grade {$submission['grade']} is out of valid range (0-100)." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Grade {$submission['grade']} is within valid range." . PHP_EOL;
        return parent::handle($submission);
    }
}
