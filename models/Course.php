<?php
class Course {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function enrollStudent($studentId, $courseId) {
        $stmt = $this->pdo->prepare("INSERT INTO enrollments (student_id, course_id) VALUES (?, ?)");
        return $stmt->execute([$studentId, $courseId]);
    }

    public function updateEnrollmentStatus($courseId, $studentId, $status) {
        $stmt = $this->pdo->prepare("UPDATE enrollments SET status = ? WHERE course_id = ? AND student_id = ?");
        return $stmt->execute([$status, $courseId, $studentId]);
    }
}
