<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST['id'])) {
		
		$id	   = $_POST['id'];

		$deleteResult = $connection->prepare(
			"DELETE FROM training_datas_results WHERE user_id=:id"
		);
		$delete = $connection->prepare(
			"DELETE FROM training_datas WHERE user_id=:id"
		);
		
		$delete->bindParam("id", $id);
		$delete->execute();
		
		$deleteResult->bindParam("id", $id);
		$deleteResult->execute();
	}
}
?>