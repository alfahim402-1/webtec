<?php
class AssignmentController {
    private $assignmentModel;

    public function __construct($pdo) {
        $this->assignmentModel = new Assignment($pdo);
    }

    
    public function submitAssignment($studentId, $assignmentId, $filePath) {
        return $this->assignmentModel->submit($studentId, $assignmentId, $filePath);
    }

    
    public function viewSubmissions($assignmentId) {
        return $this->assignmentModel->getSubmissions($assignmentId);
    }
}
