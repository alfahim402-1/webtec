<?php
class CourseController {
    private $courseModel;

    public function __construct($pdo) {
        $this->courseModel = new Course($pdo);
    }

    
    public function enroll($studentId, $courseId) {
        return $this->courseModel->enrollStudent($studentId, $courseId);
    }

    
    public function manageEnrollment($courseId, $studentId, $status) {
        return $this->courseModel->updateEnrollmentStatus($courseId, $studentId, $status);
    }
}
