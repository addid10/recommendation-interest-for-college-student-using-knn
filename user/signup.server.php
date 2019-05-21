<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    require('../database/db.php');
    if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['password'])) {
        //Variable dari Form
        $fullname   = $_POST['fullname'];
        $username   = strtolower($_POST['username']);
        $password   = $_POST['password'];
        $role       = 1; //Mahasiswa
        $location   = array();
        
        //Variable lain yang berkaitan
        $newPassword = password_hash($password, PASSWORD_DEFAULT);

        //Validasi username
        $usernameValidation = $connection->prepare(
            "SELECT COUNT(username) from users where username=:username");
        $usernameValidation->bindParam("username", $username);
        $usernameValidation->execute();
        $countUsername = $usernameValidation->fetchColumn();

        if($countUsername == "1"){
            $location['result'] = 'signup?status=Username tidak tersedia!';
            echo json_encode($location);
        }
        else {
            //Input data users ke database
            $add = $connection->prepare(
                "INSERT INTO users (role_id, username, password, fullname) 
                VALUES (:role, :username, :password, :fullname)"
            );
    
            $add->bindParam("role", $role);
            $add->bindParam("username", $username);
            $add->bindParam("password", $newPassword);
            $add->bindParam("fullname", $fullname);
            
            $result = $add->execute();
            $id     = $connection->lastInsertId();

            if($result){
                $_SESSION['college_student_username'] = $username;
                $_SESSION['college_student_id']  = $id;

                        
                /*Lokasi*/
                $location['result'] = '../';
                echo json_encode($location);
            }
        }
    }
}

?>