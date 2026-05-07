<?php

require_once __DIR__ . '/DiscountHandler.php';

/**
 * Class OwnerApproval
 * Handles discount approvals greater than 30%.
 */
class OwnerApproval extends DiscountHandler
{
    public function handle(float $percentage): void
    {
        if ($percentage > 30) {
            echo "OwnerApproval: Approved {$percentage}% discount." . PHP_EOL;
            return;
        }

        parent::handle($percentage);
    }
}
