<?php
class ReportFacade {
    private ReportGenerator $generator;

    public function __construct() {
        $this->generator = new ReportGenerator();
    }

    public function generateSimpleReport(string $name, string $grade): void {
        $this->generator->printBase($name, $grade);
    }

    public function generateFancyReport(string $name, string $grade, string $comment): void {
        $this->generator->addStars();
        $this->generator->addBorders();
        $this->generator->printBase($name, $grade);
        $this->generator->addComment($comment);
        $this->generator->addBorders();
        $this->generator->addStars();
    }
}
