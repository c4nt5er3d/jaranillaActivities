<?php

require_once __DIR__ . '/AlertHandler.php';

/**
 * Class LocalAlertHandler
 * Handles 'low' risk weather alerts.
 */
class LocalAlertHandler extends AlertHandler
{
    public function handle(string $riskLevel): void
    {
        if (strtolower($riskLevel) === 'low') {
            echo "LocalAlertHandler: Handling low risk weather alert." . PHP_EOL;
            return;
        }

        parent::handle($riskLevel);
    }
}
