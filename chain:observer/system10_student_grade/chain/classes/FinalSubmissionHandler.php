<?php

require_once __DIR__ . '/GradeHandler.php';

/**
 * FinalSubmissionHandler
 * 
 * Finalizes the grade record in the system.
 */
class FinalSubmissionHandler extends GradeHandler
{
    public function handle(array $submission): bool
    {
        echo "Finalizing: Grade {$submission['grade']} for Student {$submission['studentId']} has been officially recorded." . PHP_EOL;
        return parent::handle($submission);
    }
}
