<?php

/**
 * Class MenuSystem
 * Subsystem component responsible for displaying available menu items.
 */
class MenuSystem {
    /**
     * Displays the current menu to the client.
     */
    public function showMenu(): void {
        echo "Menu: 1. Burger, 2. Pizza, 3. Pasta" . PHP_EOL;
    }
}
