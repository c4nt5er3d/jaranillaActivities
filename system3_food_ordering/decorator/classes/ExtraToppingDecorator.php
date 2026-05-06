<?php

/**
 * Class ExtraToppingDecorator
 * Concrete Decorator that adds an extra topping and its cost to a food item.
 */
class ExtraToppingDecorator extends FoodDecorator {
    private string $topping;
    private float $toppingPrice;

    /**
     * Constructor to add a topping and its price to the food item.
     */
    public function __construct(FoodItem $decoratedItem, string $topping, float $toppingPrice) {
        parent::__construct($decoratedItem);
        $this->topping = $topping;
        $this->toppingPrice = $toppingPrice;
    }

    /**
     * Appends the extra topping to the food item's description.
     */
    public function getDescription(): string {
        return parent::getDescription() . " + Extra " . $this->topping;
    }

    /**
     * Adds the topping price to the total food item price.
     */
    public function getPrice(): float {
        return parent::getPrice() + $this->toppingPrice;
    }
}
