<?php
class BasicGameStart implements GameAction {
    public function start(): void {
        echo "Displaying: Game Started" . PHP_EOL;
    }
}
