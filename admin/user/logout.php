<?php
    session_start();

    if(isset($_SESSION['admin_username'])){
        unset($_SESSION['admin_username']);
        unset($_SESSION['admin_id']);
    
        header('location: ../../user/login'); 
        exit; 
    }
    else{
        header('location: ../'); 
    }
?>