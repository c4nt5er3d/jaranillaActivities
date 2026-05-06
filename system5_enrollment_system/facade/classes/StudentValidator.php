<?php
class StudentValidator {
    public function validate(string $name): bool {
        echo "Checking student name: " . $name . PHP_EOL;
        return !empty(trim($name));
    }
}
