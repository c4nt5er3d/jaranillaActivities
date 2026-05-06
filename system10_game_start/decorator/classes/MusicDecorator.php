<?php
class MusicDecorator extends GameDecorator {
    public function start(): void {
        echo "Starting background music..." . PHP_EOL;
        parent::start();
    }
}
