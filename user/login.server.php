<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    require_once('../database/db.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        $location = array();

        /* Validasi Akun */
        $validation = $connection->prepare(
            "SELECT user_id, password, role_id, COUNT(*) as count_user FROM users 
            WHERE username=:username");
        
        $validation->bindParam("username", $username);

        $validation->execute();
        $row = $validation->fetch();

        /* Nilai User dalam Database */
        $id     = $row['user_id'];
        $pass   = $row['password'];
        $count  = $row['count_user'];
        $role   = $row['role_id'];

        if($count == 1) {
            if(password_verify($password, $pass) == $password){
                if($role == 1) {
                    setcookie('college_student_username', $username, time() + (86400 * 30), "/");
                    setcookie('college_student_id', $id, time() + (86400 * 30), "/");

                    $location['result'] = '../';
                    echo json_encode($location);
                    exit;
                } else if ($role == 2) {
                    $_SESSION['admin_username']   = $username;
                    $_SESSION['admin_id']         = $id;

                    $location['result'] = '../admin';
                    echo json_encode($location);
                    exit;
                }
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