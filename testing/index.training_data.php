<?php
    require_once('../database/db.php');
    $datas = $connection->prepare(
        "SELECT * FROM training_datas t 
        JOIN training_datas_results r ON t.user_id = r.user_id
        JOIN features f ON f.feature_id = t.feature_id 
        JOIN results d ON r.result_id = d.result_id
        JOIN users u ON t.user_id = u.user_id
        ORDER BY length(feature_variable), feature_variable");

    $datas->execute();
    $trainingDatas = $datas->fetchAll(PDO::FETCH_OBJ);
    
    $no             = 1;
    $data           = array();
    $features       = array();
    $scores         = array();
    $users          = array();
    
    foreach($trainingDatas as $row) {

        if(!isset($data[$row->fullname])){
            $data[$row->fullname] = array();
        }
        if(!isset($data[$row->fullname][$row->feature_variable])){
            $data[$row->fullname][$row->feature_variable] = array();
        }
        $data[$row->fullname]["Hasil"] = $row->result_name;
        $data[$row->fullname][$row->feature_variable] = $row->score;

        $features[]     = $row->feature_variable;
        $featureNames[$row->feature_variable]["Name"]     = $row->feature_name;
        $featureNames[$row->feature_variable]["Variable"] = $row->feature_variable;
        $featureNames[$row->feature_variable]["Input"]    = $row->feature_form_input;
    

    }
    $feature      = array_unique($features);
    // $featureName  = array_unique($featureNames);
    $countFeature = count($feature);

    


?>