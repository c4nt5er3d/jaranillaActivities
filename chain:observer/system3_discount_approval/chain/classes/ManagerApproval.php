<?php

require_once __DIR__ . '/DiscountHandler.php';

/**
 * Class ManagerApproval
 * Handles discount approvals up to 30%.
 */
class ManagerApproval extends DiscountHandler
{
    public function handle(float $percentage): void
    {
        if ($percentage <= 30) {
            echo "ManagerApproval: Approved {$percentage}% discount." . PHP_EOL;
            return;
        }

        parent::handle($percentage);
    }
}
