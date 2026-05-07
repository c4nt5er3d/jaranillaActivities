<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class AccountingDept
 * Concrete Observer for Accounting Department.
 */
class AccountingDept implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Accounting Dept: Received discount update for financial records - {$message}" . PHP_EOL;
    }
}
