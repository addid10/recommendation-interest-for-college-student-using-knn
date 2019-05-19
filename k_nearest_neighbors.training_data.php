<?php

    $datas = $connection->prepare(
        "SELECT var_f20, var_f21, result_name FROM knn_training_datas t JOIN knn_training_datas_results r 
        ON t.id = r.training_id JOIN knn_detail_results d ON r.result_id=d.result_id");

    $datas->execute();
    $trainingDatas = $datas->fetchAll(PDO::FETCH_OBJ);

    $no = 1;

?>