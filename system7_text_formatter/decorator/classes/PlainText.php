<?php
class PlainText implements Text {
    private string $content;
    public function __construct(string $content) {
        $this->content = $content;
    }
    public function format(): string {
        return $this->content;
    }
}
