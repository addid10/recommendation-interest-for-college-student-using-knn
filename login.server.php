<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    require_once('database/db.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        $location = array();

        /* Validasi Akun */
        $validation = $connection->prepare(
            "SELECT user_id, password, COUNT(*) as count_user FROM users 
            WHERE username=:username");
        
        $validation->bindParam("username", $username);

        $validation->execute();
        $row = $validation->fetch();

        /* Nilai User dalam Database */
        $id     = $row['user_id'];
        $pass   = $row['password'];
        $count  = $row['count_user'];

        if($count == 1) {
            if(password_verify($password, $pass) == $password){
                $_SESSION['college_student_username']   = $username;
                $_SESSION['college_student_id']    = $id;

                $location['result'] = '../proyek-sc';
                echo json_encode($location);
                exit;
            } else {
                $location['result'] = 'login?status=Username atau password salah!';
                echo json_encode($location);
                exit;
            }
        } else {
            $location['result'] = 'login?status=Username atau password salah!';
            echo json_encode($location);
            exit;
        }
    }
}
?>