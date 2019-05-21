<?php
    require_once('../database/db.php');
    $id = $_SESSION['college_student_id'];


    $evaluationDatas = $connection->prepare(
        "SELECT * FROM testing_datas_evaluations e 
        JOIN results r ON e.result_id=r.result_id
        JOIN testing_datas n ON n.id=e.testing_data_id
        WHERE n.user_id=:user_id
        GROUP BY e.result_id ORDER BY euclidean_distance ASC LIMIT 3");

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