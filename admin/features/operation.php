<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST["variable_name"]) && isset($_POST['name'])) {

		$name 		= $_POST['name'];
		$variable	= $_POST['variable_name'];
		$categories	= $_POST['categories'];


		//Add
		if($_POST["operation"] == "Add") {

			$add = $connection->prepare(
			"INSERT INTO features (feature_name, feature_variable, feature_form_input) 
			VALUES (:name, :variable, :categories)
			");

			$add->bindParam("name", $name);
			$add->bindParam("variable", $variable);
			$add->bindParam("categories", $categories);
			$add->execute();
		}

		//Edit
		if($_POST["operation"] == "Edit") {
			$id = $_POST['id'];

			$update = $connection->prepare(
				"UPDATE features SET 
				feature_name		= :name, 
				feature_variable 	= :variable,
				feature_form_input	= :categories
				WHERE feature_id	= :id"
			);

			
			$update->bindParam("id", $id);
			$update->bindParam("name", $name);
			$update->bindParam("variable", $variable);
			$update->bindParam("categories", $categories);
			$update->execute();

		}
	}
}
?>