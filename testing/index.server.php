<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    require('../database/db.php');
    if(isset($_POST['score']) && isset($_SESSION['college_student_id'])) {
        $id    = $_SESSION['college_student_id'];
        $score = $_POST['score'];

        $datas = $connection->prepare(
            "SELECT * FROM training_datas t 
            JOIN training_datas_results r ON t.user_id = r.user_id
            JOIN features f ON f.feature_id = t.feature_id 
            JOIN results d ON r.result_id = d.result_id
            JOIN users u ON t.user_id = u.user_id
            ORDER BY length(feature_variable), feature_variable");
    
        $datas->execute();
        $trainingDatas = $datas->fetchAll(PDO::FETCH_OBJ);

        foreach($trainingDatas as $row) {

            if(!isset($data[$row->fullname])){
                $data[$row->fullname] = array();
            }
            if(!isset($data[$row->fullname][$row->feature_id])){
                $data[$row->fullname][$row->feature_id] = array();
            }
            $data[$row->fullname][$row->feature_id] = $row->score;
            $features[]   = $row->feature_id;

            $results[$row->fullname]    = $row->result_id;
            $neighbors[$row->fullname]  = $row->user_id;

        }
        $feature      = array_unique($features);
        $countFeature = count($feature);



        $i = 0;
        foreach($feature as $f) {
            $featureScore     = $score[$i++];
            $featureId        = $f;
            $featureInArray[] = $featureId;

            if(!isset($featureTest[$featureId])){
                $featureTest[$featureId] = array();
            }
            $featureTest[$featureId] = (float)$featureScore;

            $add = $connection->prepare(
                "INSERT INTO testing_datas (user_id, feature_id, score) 
                VALUES (:id, :feature, :score)"
            );
            $add->bindParam("id", $id);
            $add->bindParam("feature", $featureId);
            $add->bindParam("score", $featureScore);
            $add->execute();
        }
        
        //Mencari Kuadrat
        $square = array();
        foreach($data as $name => $featureTraine) {
            if(!isset($square[$name])){
                $square[$name] = array();
            }
            foreach($feature as $f) {
                if(!isset($square[$name][$f])){
                    $square[$name][$f] = array();
                }
                $square[$name][$f] = pow($featureTraine[$f]-$featureTest[$f], 2);

            }

        }

        //Mencari Euclidean Distance
        $euclideanDistances = array();
        foreach($square as $name => $score) {
            if(!isset($euclideanDistances[$name])){
                $euclideanDistances[$name] = array();
            }
            $euclideanDistances[$name] = sqrt(array_sum($score));
        }
        
        //Masukkan Nilai Euclidean Distance
        $e = 0;
        foreach($euclideanDistances as $name => $score) {
            $result            = $results[$name];
            $euclideanDistance = $score;
            $neighborId        = $neighbors[$name];



            $evaluations = $connection->prepare(
                "INSERT INTO testing_datas_evaluations (neighbor_id, euclidean_distance, result_id, user_id) 
                VALUES (:neighbor_id, :euclidean_distance, :result, :id)"
            );
        
            $evaluations->bindParam("neighbor_id", $neighborId);
            $evaluations->bindParam("euclidean_distance", $euclideanDistance);
            $evaluations->bindParam("result", $result);
            $evaluations->bindParam("id", $id);
            $evaluations->execute();
        }

        if($evaluations) {
            header('location: ../result');
        }
        
    }
}

?>