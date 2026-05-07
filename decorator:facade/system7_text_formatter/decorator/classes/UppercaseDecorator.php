<?php
class UppercaseDecorator extends TextDecorator {
    public function format(): string {
        return strtoupper(parent::format());
    }
}
