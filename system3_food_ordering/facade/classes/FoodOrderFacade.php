<?php

/**
 * Class FoodOrderFacade
 * Simplifies the food ordering process by unifying menu, pricing, preparation, and receipt subsystems.
 */
class FoodOrderFacade {
    private MenuSystem $menu;
    private PricingSystem $pricing;
    private PreparationSystem $preparation;
    private ReceiptSystem $receipt;

    /**
     * Initializes the various subsystems involved in food ordering.
     */
    public function __construct() {
        $this->menu = new MenuSystem();
        $this->pricing = new PricingSystem();
        $this->preparation = new PreparationSystem();
        $this->receipt = new ReceiptSystem();
    }

    /**
     * Orchestrates the complete flow of ordering food, from showing the menu to printing a receipt.
     */
    public function orderFood(string $item): void {
        $this->menu->showMenu();
        $price = $this->pricing->calculatePrice($item);
        $this->preparation->prepareOrder($item);
        $this->receipt->printReceipt($item, $price);
    }
}
