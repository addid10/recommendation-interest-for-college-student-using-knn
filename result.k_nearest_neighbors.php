<?php

    require_once('database/db.php');

    $EvaluationDatas = $connection->prepare(
        "SELECT * FROM knn_new_datas_evaluations e JOIN knn_detail_results d ON e.result_id=d.result_id
        GROUP BY e.result_id ORDER BY euclidean_distance ASC LIMIT 3");

    $EvaluationDatas->execute();
    $resultKnn  = $EvaluationDatas->fetchAll(PDO::FETCH_OBJ);
    $rankingKnn = 1;

?>