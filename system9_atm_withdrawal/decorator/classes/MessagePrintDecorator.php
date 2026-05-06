<?php
class MessagePrintDecorator extends ATMDecorator {
    public function execute(): void {
        parent::execute();
        echo "Message: Transaction successful. Please take your cash." . PHP_EOL;
    }
}
