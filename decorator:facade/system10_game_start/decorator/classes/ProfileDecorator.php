<?php
class ProfileDecorator extends GameDecorator {
    public function start(): void {
        echo "Loading player profile..." . PHP_EOL;
        parent::start();
    }
}
