<?php
class StudentModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli("localhost", "root", "", "studentdb");
    }

    public function getStudentByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM students WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }


    public function getProfile($username) {
        $stmt = $this->db->prepare("SELECT * FROM students WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateProfile($data) {
        $stmt = $this->db->prepare("UPDATE students SET name=?, bio=?, hobbies=?, courses=? WHERE username=?");
        $stmt->bind_param("sssss", $data['name'], $data['bio'], $data['hobbies'], $data['courses'], $data['username']);
        return $stmt->execute();
    }
    public function handleLogin($username, $password) {
        $student = $this->model->getStudentByUsername($username);

        if ($student) {
            if ($student['password'] === $password) {
                $_SESSION['username'] = $username;
                header("Location: index.php");
                exit;
            }

            //  If using hashed passwords
            // if (password_verify($password, $student['password'])) {
            //     $_SESSION['username'] = $username;
            //     header("Location: index.php");
            //     exit;
            // }
        }

        //Login failed
        $error = "Invalid username or password.";
        include './view/loginForm.php';
    }
}
?>