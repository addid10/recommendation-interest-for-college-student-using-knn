<?php
    require_once('../database/db.php');
    $id = $_SESSION['college_student_id'];


    $evaluationDatas = $connection->prepare(
        "SELECT * FROM results r 
        INNER JOIN (
            SELECT result_id, min(euclidean_distance) euclidean_distance FROM testing_datas_evaluations tde
            WHERE tde.user_id=:user_id 
            GROUP BY tde.result_id
            ) as b 
            
            ON b.result_id = r.result_id
            ORDER BY euclidean_distance ASC LIMIT 3");

    $evaluationDatas->bindParam("user_id", $id);
    $evaluationDatas->execute();
    $resultKnn  = $evaluationDatas->fetchAll(PDO::FETCH_OBJ);

    if($evaluationDatas) {
        $statusData = true;
    } else {
        $statusData = false;
    }
    $rankingKnn = 1;

?>