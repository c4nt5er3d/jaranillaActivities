<?php
abstract class ATMDecorator implements ATMOperation {
    protected ATMOperation $tempOperation;
    public function __construct(ATMOperation $operation) {
        $this->tempOperation = operation;
    }
    public function execute(): void {
        $this->tempOperation->execute();
    }
}
