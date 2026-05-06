<?php
abstract class TextDecorator implements Text {
    protected Text $decoratedText;
    public function __construct(Text $text) {
        $this->decoratedText = $text;
    }
    public function format(): string {
        return $this->decoratedText->format();
    }
}
