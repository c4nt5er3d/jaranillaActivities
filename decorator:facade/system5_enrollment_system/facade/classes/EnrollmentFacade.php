<?php
class EnrollmentFacade {
    private StudentValidator $validator;
    private IDService $idService;
    private EnrollmentDatabase $database;

    public function __construct() {
        $this->validator = new StudentValidator();
        $this->idService = new IDService();
        $this->database = new EnrollmentDatabase();
    }

    public function enrollStudent(string $name): void {
        if ($this->validator->validate($name)) {
            $id = $this->idService->assignID();
            $this->database->addStudent($name, $id);
            echo "Enrollment complete for: " . $name . PHP_EOL;
        } else {
            echo "Enrollment failed: Invalid name." . PHP_EOL;
        }
    }
}
