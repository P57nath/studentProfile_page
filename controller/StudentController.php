<?php require_once '//model/StudentModel.php'; 

class StudentController {
    private $model;

    public function __construct() {
        $this->model = new StudentModel();
    }

    public function showProfile($username) {
        $profile = $this->model->getProfile($username);
        include '//view/profileView.php';
    }

    public function handleLogin($username, $password) {
        // validate login (you can expand this)
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }

    public function updateProfile($data) {
        $this->model->updateProfile($data);
        header("Location: index.php");
    }
}
?>