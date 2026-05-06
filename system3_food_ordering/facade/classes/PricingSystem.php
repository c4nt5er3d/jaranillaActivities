<?php

/**
 * Class PricingSystem
 * Subsystem component responsible for calculating prices for menu items.
 */
class PricingSystem {
    /**
     * Returns the price based on the given food item name.
     */
    public function calculatePrice(string $item): float {
        if (strcasecmp($item, "Burger") === 0) return 5.99;
        if (strcasecmp($item, "Pizza") === 0) return 8.99;
        return 4.99;
    }
}
