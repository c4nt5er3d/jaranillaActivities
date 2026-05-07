<?php
class IDService {
    public function assignID(): string {
        $id = "ID-" . rand(1000, 9999);
        echo "Assigning ID: " . $id . PHP_EOL;
        return $id;
    }
}
