<?php

/**
 * Class GameCharacterFacade
 * Simplifies character creation by unifying various subsystem components.
 */
class GameCharacterFacade {
    private StatSystem $statSystem;
    private EquipmentSystem $equipmentSystem;
    private BuffSystem $buffSystem;

    /**
     * Initializes the character-related subsystems.
     */
    public function __construct() {
        $this->statSystem = new StatSystem();
        $this->equipmentSystem = new EquipmentSystem();
        $this->buffSystem = new BuffSystem();
    }

    /**
     * Orchestrates the complex steps of creating a warrior character.
     */
    public function createWarrior(): void {
        echo "--- Creating Warrior ---" . PHP_EOL;
        $this->statSystem->setStats(100, 20);
        $this->equipmentSystem->equipArmor("Iron Plate");
        $this->equipmentSystem->equipWeapon("Greatsword");
        $this->buffSystem->applySpeedBoost(10);
        echo "Warrior Ready!" . PHP_EOL;
    }
}
