<?php

require_once __DIR__ . '/DiscountHandler.php';

/**
 * Class StaffApproval
 * Handles discount approvals up to 10%.
 */
class StaffApproval extends DiscountHandler
{
    public function handle(float $percentage): void
    {
        if ($percentage <= 10) {
            echo "StaffApproval: Approved {$percentage}% discount." . PHP_EOL;
            return;
        }

        parent::handle($percentage);
    }
}
