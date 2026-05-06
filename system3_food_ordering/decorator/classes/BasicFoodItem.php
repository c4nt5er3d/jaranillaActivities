<?php

/**
 * Class BasicFoodItem
 * Concrete Component providing the basic implementation of a food item.
 */
class BasicFoodItem implements FoodItem {
    private string $name;
    private float $price;

    /**
     * Constructor to initialize the basic food item with name and price.
     */
    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Returns the base name of the food item.
     */
    public function getDescription(): string {
        return $this->name;
    }

    /**
     * Returns the base price of the food item.
     */
    public function getPrice(): float {
        return $this->price;
    }
}
