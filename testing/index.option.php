<?php
    $featureVariable = $f;

    $options = $connection->prepare(
        "SELECT * FROM features f 
        JOIN features_options fo ON f.feature_id = fo.feature_id 
        WHERE feature_variable =:variable");

    $options->bindParam("variable", $featureVariable);
    $options->execute();
    $optionDatas = $options->fetchAll(PDO::FETCH_OBJ); 
?>