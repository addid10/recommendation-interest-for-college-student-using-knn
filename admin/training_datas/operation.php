<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST["name"]) && isset($_POST['score'])) {

        $name     = $_POST['name'];
        $username = strtolower($name);
        $score    = $_POST['score'];
        $result   = $_POST['result'];
        $role     = 1;
		$password = password_hash($username, PASSWORD_DEFAULT);
		
		$newUser  = $connection->prepare(
			"INSERT INTO users (role_id, username, password, fullname) 
			VALUES (:role, :username, :password, :fullname)"
		);
    
		$newUser->bindParam("role", $role);
		$newUser->bindParam("username", $username);
		$newUser->bindParam("password", $password);
		$newUser->bindParam("fullname", $name);
		$newUser->execute();

		$id  = $connection->lastInsertId();

		$features = $connection->prepare(
			"SELECT feature_id FROM features"
		);
		$features->execute();
		$feature = $features->fetchAll(PDO::FETCH_OBJ);
		
		foreach ($feature as $row) {
			$featureInArray[] = $row->feature_id;
		}


		//Add
		if($_POST["operation"] == "Add") {

			$add = $connection->prepare(
			"INSERT INTO training_datas (user_id, feature_id, score) 
			VALUES (:id, :feature_id, :score)
			");

			foreach($score as $number => $value) {
				$featureId = $featureInArray[$number];

				$add->bindParam("id", $id);
				$add->bindParam("feature_id", $featureId);
				$add->bindParam("score", $value);
				$add->execute();

			}

			if($add){
				$addResult = $connection->prepare(
					"INSERT INTO training_datas_results (result_id, user_id) 
					VALUES (:result, :id)
				");

				$addResult->bindParam("id", $id);
				$addResult->bindParam("result", $result);
				$addResult->execute();
			}
			
			
		}

	}
}
?>