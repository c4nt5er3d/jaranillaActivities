<?php
class BalanceCheckDecorator extends ATMDecorator {
    public function execute(): void {
        echo "Status: Checking balance..." . PHP_EOL;
        parent::execute();
    }
}
