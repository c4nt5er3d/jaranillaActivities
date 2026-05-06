<?php
class MapDecorator extends GameDecorator {
    public function start(): void {
        echo "Loading map..." . PHP_EOL;
        parent::start();
    }
}
