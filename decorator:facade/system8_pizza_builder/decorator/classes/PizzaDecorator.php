<?php
abstract class PizzaDecorator implements Pizza {
    protected Pizza $tempPizza;
    public function __construct(Pizza $newPizza) {
        $this->tempPizza = $newPizza;
    }
    public function getDescription(): string {
        return $this->tempPizza->getDescription();
    }
    public function getCost(): float {
        return $this->tempPizza->getCost();
    }
}
