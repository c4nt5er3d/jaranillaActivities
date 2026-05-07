<?php

require_once __DIR__ . '/AlertHandler.php';

/**
 * Class RegionalAlertHandler
 * Handles 'medium' risk weather alerts.
 */
class RegionalAlertHandler extends AlertHandler
{
    public function handle(string $riskLevel): void
    {
        if (strtolower($riskLevel) === 'medium') {
            echo "RegionalAlertHandler: Handling medium risk weather alert." . PHP_EOL;
            return;
        }

        parent::handle($riskLevel);
    }
}
