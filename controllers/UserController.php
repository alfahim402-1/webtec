<?php
class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

      
            if ($user['role'] == 'student') {
                header('Location: ../views/student_dashboard.php');
            } elseif ($user['role'] == 'instructor') {
                header('Location: ../views/instructor_dashboard.php');
            }
            exit();
        }
        return "Invalid login credentials.";
    }

    public function register($name, $email, $password, $role) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }
        if (strlen($password) < 6) {
            return "Password must be at least 6 characters";
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $this->userModel->createUser($name, $email, $hashedPassword, $role);
    }


    public function updateProfile($userId, $name, $email) {
        return $this->userModel->updateUserProfile($userId, $name, $email);
    }

    public function changePassword($userId, $oldPassword, $newPassword) {
        $user = $this->userModel->getUserById($userId);
        if ($user && password_verify($oldPassword, $user['password'])) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            return $this->userModel->updatePassword($userId, $hashedPassword);
        }
        return "Old password is incorrect.";
    }
}
