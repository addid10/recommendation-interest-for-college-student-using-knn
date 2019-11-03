<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST["id"])) {

		$id 	 = $_POST['id'];
		$result  = array();

		$statement = $connection->prepare(
			"SELECT * FROM features WHERE feature_id=:id"
		);
		$statement->bindParam("id", $id);
		$statement->execute();
		$fetchData = $statement->fetchAll();
		
		foreach($fetchData as $row) {
			$result["variable"]  = $row["feature_variable"];
			$result["name"] 	 = $row["feature_name"];
			$result["type"]    	 = $row["feature_form_input"];
		}
		echo json_encode($result);
	}
}
?>