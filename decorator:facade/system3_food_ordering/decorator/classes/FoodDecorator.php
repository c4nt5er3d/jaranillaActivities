<?php

/**
 * Abstract class FoodDecorator
 * Base decorator class that maintains a reference to a FoodItem.
 */
abstract class FoodDecorator implements FoodItem {
    protected FoodItem $decoratedItem;

    /**
     * Constructor to wrap an existing FoodItem.
     */
    public function __construct(FoodItem $decoratedItem) {
        $this->decoratedItem = $decoratedItem;
    }

    /**
     * Delegates description retrieval to the wrapped food item.
     */
    public function getDescription(): string {
        return $this->decoratedItem->getDescription();
    }

    /**
     * Delegates price retrieval to the wrapped food item.
     */
    public function getPrice(): float {
        return $this->decoratedItem->getPrice();
    }
}
