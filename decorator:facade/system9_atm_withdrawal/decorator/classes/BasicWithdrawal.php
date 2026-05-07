<?php
class BasicWithdrawal implements ATMOperation {
    public function execute(): void {
        echo "Processing: Withdrawing money..." . PHP_EOL;
    }
}
