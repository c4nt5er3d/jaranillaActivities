<?php
class Cheese extends PizzaDecorator {
    public function getDescription(): string {
        return $this->tempPizza->getDescription() . ", Cheese";
    }
    public function getCost(): float {
        return $this->tempPizza->getCost() + 10.0;
    }
}
