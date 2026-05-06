<?php
class Mushroom extends PizzaDecorator {
    public function getDescription(): string {
        return $this->tempPizza->getDescription() . ", Mushrooms";
    }
    public function getCost(): float {
        return $this->tempPizza->getCost() + 15.0;
    }
}
