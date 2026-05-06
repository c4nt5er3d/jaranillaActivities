<?php

class CommentDecorator extends ReportDecorator {
    private string $comment;

    public function __construct(Report $report, string $comment) {
        parent::__construct($report);
        $this->comment = $comment;
    }

    public function display(): void {
        parent::display();
        echo "Comment: " . $this->comment . "\n";
    }
}
