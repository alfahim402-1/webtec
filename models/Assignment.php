<?php
class Assignment {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function submit($studentId, $assignmentId, $filePath) {
        $stmt = $this->pdo->prepare("INSERT INTO submissions (student_id, assignment_id, file_path) VALUES (?, ?, ?)");
        return $stmt->execute([$studentId, $assignmentId, $filePath]);
    }

    public function getSubmissions($assignmentId) {
        $stmt = $this->pdo->prepare("SELECT * FROM submissions WHERE assignment_id = ?");
        $stmt->execute([$assignmentId]);
        return $stmt->fetchAll();
    }
}
