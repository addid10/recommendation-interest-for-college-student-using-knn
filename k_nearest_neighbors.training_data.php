<?php

require_once('database/db.php');

$datas = $connection->prepare(
    "SELECT var_f20, var_f21, result FROM knn_training_datas d JOIN knn_training_datas_results r 
    ON d.id = r.training_id");

$datas->execute();
$trainingDatas = $datas->fetchAll(PDO::FETCH_OBJ);

?>