<?php

/**
 * Class EquipmentSystem
 * Subsystem component responsible for managing character equipment.
 */
class EquipmentSystem {
    /**
     * Equips the character with the specified armor.
     */
    public function equipArmor(string $armor): void {
        echo "Equipping Armor: " . $armor . PHP_EOL;
    }

    /**
     * Equips the character with the specified weapon.
     */
    public function equipWeapon(string $weapon): void {
        echo "Equipping Weapon: " . $weapon . PHP_EOL;
    }
}
