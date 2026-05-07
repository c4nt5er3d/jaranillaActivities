<?php
class BoldDecorator extends TextDecorator {
    public function format(): string {
        return "**" . parent::format() . "**";
    }
}
