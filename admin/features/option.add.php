<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST["name"]) && isset($_POST['feature_id'])) {

		$optionName  = $_POST['name'];
		$optionValue = $_POST['value'];
        $featureId   = $_POST['feature_id'];

        $add = $connection->prepare(
            "INSERT INTO features_options (feature_id, option_name, option_value) 
            VALUES (:id, :name, :value)
        ");
    
        $add->bindParam("name", $optionName);
        $add->bindParam("value", $optionValue);
        $add->bindParam("id", $featureId);
        $add->execute();
    }
}
?>

