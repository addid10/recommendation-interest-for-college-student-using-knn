<?php
    session_start();

    if(isset($_SESSION['college_student_username'])){
        unset($_SESSION['college_student_username']);
        unset($_SESSION['college_student_id']);
    
        header('location: login'); 
        exit; 
    }
    else{
        header('location: http://localhost/proyek-sc/'); 
    }
?>