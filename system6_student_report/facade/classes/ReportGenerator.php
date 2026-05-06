<?php
class ReportGenerator {
    public function printBase(string $name, string $grade): void {
        echo "Student: " . $name . " | Grade: " . $grade . PHP_EOL;
    }
    public function addBorders(): void { echo "--------------------------------" . PHP_EOL; }
    public function addStars(): void { echo "********************************" . PHP_EOL; }
    public function addComment(string $comment): void { echo "Comment: " . $comment . PHP_EOL; }
}
