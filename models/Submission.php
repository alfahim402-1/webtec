<?php
class Submission {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSubmissionDetails($submissionId) {
        $stmt = $this->pdo->prepare("SELECT * FROM submissions WHERE id = :id");
        $stmt->execute(['id' => $submissionId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
}
?>
