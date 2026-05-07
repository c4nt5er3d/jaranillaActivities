<?php

class BasicReport implements Report {
    private string $name;
    private string $grade;

    public function __construct(string $name, string $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function display(): void {
        echo "Student: " . $this->name . " | Grade: " . $this->grade . "\n";
    }
}
