<?php

require_once __DIR__ . '/AlertHandler.php';

/**
 * Class NationalAlertHandler
 * Handles 'high' risk weather alerts.
 */
class NationalAlertHandler extends AlertHandler
{
    public function handle(string $riskLevel): void
    {
        if (strtolower($riskLevel) === 'high') {
            echo "NationalAlertHandler: Handling high risk weather alert." . PHP_EOL;
            return;
        }

        parent::handle($riskLevel);
    }
}
