<?php

abstract class ReportDecorator implements Report {
    protected Report $decoratedReport;

    public function __construct(Report $report) {
        $this->decoratedReport = $report;
    }

    public function display(): void {
        $this->decoratedReport->display();
    }
}
