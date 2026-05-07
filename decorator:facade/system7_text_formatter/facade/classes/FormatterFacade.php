<?php
class FormatterFacade {
    private TextProcessor $processor;

    public function __construct() {
        $this->processor = new TextProcessor();
    }

    public function printPlain(string $text): void {
        echo "Plain: " . $text . PHP_EOL;
    }
    public function printBold(string $text): void {
        echo "Bold: " . $this->processor->toBold($text) . PHP_EOL;
    }
    public function printUppercase(string $text): void {
        echo "Uppercase: " . $this->processor->toUppercase($text) . PHP_EOL;
    }
    public function printBoth(string $text): void {
        $result = $this->processor->toUppercase($text);
        $result = $this->processor->toBold($result);
        echo "Both: " . $result . PHP_EOL;
    }
}
