<?php
    require_once('../../database/db.php');

    $evaluationDatas = $connection->prepare(
        "SELECT * FROM results r 
        INNER JOIN (
            SELECT result_id, min(euclidean_distance) euclidean_distance, fullname FROM testing_datas_evaluations tde
            JOIN users u ON u.user_id = tde.user_id
            GROUP BY tde.user_id
            ) as b 
            ON b.result_id = r.result_id
            ORDER BY euclidean_distance ASC");

    $evaluationDatas->execute();
    $results  = $evaluationDatas->fetchAll(PDO::FETCH_OBJ);

    $no    = 1;

?>