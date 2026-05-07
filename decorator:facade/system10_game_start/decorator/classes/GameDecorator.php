<?php
abstract class GameDecorator implements GameAction {
    protected GameAction $tempAction;
    public function __construct(GameAction $action) {
        $this->tempAction = $action;
    }
    public function start(): void {
        $this->tempAction->start();
    }
}
