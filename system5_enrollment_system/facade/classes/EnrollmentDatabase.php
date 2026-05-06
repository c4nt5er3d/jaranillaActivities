<?php
class EnrollmentDatabase {
    public function addStudent(string $name, string $id): void {
        echo "Adding student " . $name . " (ID: " . $id . ") to the system list." . PHP_EOL;
    }
}
