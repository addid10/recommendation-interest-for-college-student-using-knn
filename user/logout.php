<?php
    session_start();

    if(isset($_SESSION['college_student_username'])){
        unset($_SESSION['college_student_username']);
        unset($_SESSION['college_student_id']);
    
        header('location: ../user/login'); 
        exit; 
    }
    else{
        header('location: ../'); 
    }
?>