<?php

/**
 * Class LargeSizeDecorator
 * Concrete Decorator that increases the size and price of a food item.
 */
class LargeSizeDecorator extends FoodDecorator {
    /**
     * Constructor to initialize the decorator.
     */
    public function __construct(FoodItem $decoratedItem) {
        parent::__construct($decoratedItem);
    }

    /**
     * Prepends "Large" to the food item's description.
     */
    public function getDescription(): string {
        return "Large " . parent::getDescription();
    }

    /**
     * Increases the price for the large size.
     */
    public function getPrice(): float {
        return parent::getPrice() + 2.00;
    }
}
