<?php
class StudentModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli("localhost", "root", "", "studentdb");
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
}
?>