<?php

/**
 * Interface FoodItem
 * Acts as the base Component in the Decorator pattern for food ordering.
 */
interface FoodItem {
    /**
     * Returns the description of the food item.
     */
    public function getDescription(): string;

    /**
     * Returns the price of the food item.
     */
    public function getPrice(): float;
}
