<?php

    if(isset($_COOKIE['college_student_username'])){
        setcookie('college_student_username', '', time()-31556926, '/');
        setcookie('college_student_id', '', time()-31556926, '/');

    
        header('location: ../user/login'); 
        exit; 
    }
    else{
        header('location: ../'); 
    }
?>