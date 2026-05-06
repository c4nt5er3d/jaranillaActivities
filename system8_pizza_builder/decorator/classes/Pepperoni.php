<?php
class Pepperoni extends PizzaDecorator {
    public function getDescription(): string {
        return $this->tempPizza->getDescription() . ", Pepperoni";
    }
    public function getCost(): float {
        return $this->tempPizza->getCost() + 20.0;
    }
}
