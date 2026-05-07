<?php

/**
 * Class QuizFacade
 * Simplifies the quiz process by unifying question loading, timing, answer processing, and scoring subsystems.
 */
class QuizFacade {
    private QuestionLoader $loader;
    private TimerSystem $timer;
    private AnswerProcessor $processor;
    private ScoringSystem $scoring;

    /**
     * Initializes the various subsystems involved in running a quiz.
     */
    public function __construct() {
        $this->loader = new QuestionLoader();
        $this->timer = new TimerSystem();
        $this->processor = new AnswerProcessor();
        $this->scoring = new ScoringSystem();
    }

    /**
     * Orchestrates the complete flow of running a quiz.
     */
    public function runQuiz(array $answers, int $score): void {
        $this->loader->load();
        $this->timer->start();
        $this->processor->process($answers);
        $this->scoring->calculateAndShow($score);
    }
}
