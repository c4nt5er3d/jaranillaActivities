<?php
class AccountCheckDecorator extends ATMDecorator {
    public function execute(): void {
        echo "Status: Checking account..." . PHP_EOL;
        parent::execute();
    }
}
