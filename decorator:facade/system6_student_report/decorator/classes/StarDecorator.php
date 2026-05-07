<?php

class StarDecorator extends ReportDecorator {
    public function __construct(Report $report) {
        parent::__construct($report);
    }

    public function display(): void {
        echo "********************************\n";
        parent::display();
        echo "********************************\n";
    }
}
