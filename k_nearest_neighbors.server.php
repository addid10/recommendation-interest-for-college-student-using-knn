<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    require('database/db.php');
    if(isset($_POST['length']) && isset($_POST['width'])) {

        $length = $_POST['length'];
        $width  = $_POST['width'];
        $id     = $_SESSION['college_student_id'];

        
        
        $add = $connection->prepare(
            "INSERT INTO knn_new_datas (user_id, var_f20, var_f21) 
            VALUES (:id, :length, :width)"
        );
    
        $add->bindParam("id", $id);
        $add->bindParam("length", $length);
        $add->bindParam("width", $width);
        $add->execute();

        $newId = $connection->lastInsertId();

        $trainingDatas = $connection->prepare(
            "SELECT var_f20, var_f21, result_id FROM knn_training_datas d JOIN knn_training_datas_results r 
            ON d.id = r.training_id"
        );
        $trainingDatas->execute();
        $datas = $trainingDatas->fetchAll(PDO::FETCH_OBJ);

        foreach($datas as $data){
            $var_f20 = $data->var_f20;
            $var_f21 = $data->var_f21;
            $result  = $data->result_id;

            $euclidean_distance = sqrt(pow($var_f20-$length,2)+pow($var_f21-$width,2));

            $evaluations = $connection->prepare(
                "INSERT INTO knn_new_datas_evaluations (new_data_id, euclidean_distance, result_id) 
                VALUES (:newId, :euclidean_distance, :result)"
            );
    
            $evaluations->bindParam("newId", $newId);
            $evaluations->bindParam("euclidean_distance", $euclidean_distance);
            $evaluations->bindParam("result", $result);
            $evaluations->execute();
        }        
    }
}

?>