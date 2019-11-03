<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    require('../database/db.php');
    if(isset($_SESSION['college_student_id'])) {
        $id = $_SESSION['college_student_id'];

        $deleteEvaluations = $connection->prepare(
            "DELETE FROM testing_datas_evaluations
            WHERE user_id=:id");
    
        $deleteEvaluations->bindParam("id", $id);
        $deleteEvaluations->execute();

        if($deleteEvaluations) {
                
            $deleteTestingDatas = $connection->prepare(
                "DELETE FROM testing_datas
                WHERE user_id=:id");
        
            $deleteTestingDatas->bindParam("id", $id);
            $deleteTestingDatas->execute();

        }

        
    }
}

?>