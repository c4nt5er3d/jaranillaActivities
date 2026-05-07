<?php

/**
 * Class PreparationSystem
 * Subsystem component responsible for the preparation of food items.
 */
class PreparationSystem {
    /**
     * Simulates the preparation of the ordered food item.
     */
    public function prepareOrder(string $item): void {
        echo "Preparing " . $item . "..." . PHP_EOL;
    }
}
