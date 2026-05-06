<?php
class TextProcessor {
    public function toUppercase(string $text): string {
        return strtoupper($text);
    }
    public function toBold(string $text): string {
        return "**" . $text . "**";
    }
}
