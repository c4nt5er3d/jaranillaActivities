<?php
class HealthDecorator extends GameDecorator {
    public function start(): void {
        echo "Setting player health to 100%..." . PHP_EOL;
        parent::start();
    }
}
