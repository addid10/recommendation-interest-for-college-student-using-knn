<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');
	require_once('function.php');

	$getFeatures  = '';
	$fetchFeature = array();
	$getFeatures .= "SELECT * FROM features ";

	if(isset($_POST["search"]["value"]))
	{
		$getFeatures .= 'WHERE feature_name RLIKE :search ';
	}
	if(isset($_POST["order"]))
	{
		$getFeatures .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
	}
	else
	{
		$getFeatures .= 'ORDER BY feature_id ASC ';
	}
	if($_POST["length"] != -1)
	{
		$getFeatures .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
	}
	


	$statement = $connection->prepare($getFeatures);
	$statement->bindParam("search", $_POST["search"]["value"]);
	$statement->execute();
	$result    = $statement->fetchAll();
	$data      = array();
	$rowCount  = $statement->rowCount();

	$i = 1;
	foreach($result as $row) {
		$sub_array = array();

		$sub_array[] = $i++;
		$sub_array[] = $row["feature_variable"];
		$sub_array[] = $row["feature_name"];
		$sub_array[] = $row["feature_form_input"];

		if($row["feature_form_input"]=="select") {
			$sub_array[] = '<button type="button" name="detail" id="'.$row["feature_id"].'" class="btn btn-info detail">Option</button>';
		} else {
			$sub_array[] = '-';
		}

		$sub_array[] = '<button type="button" name="update" id="'.$row["feature_id"].'" class="btn btn-warning update">Update</button>';
		$sub_array[] = '<button type="button" name="delete" id="'.$row["feature_id"].'" class="btn btn-danger delete">Delete</button>';
		$data[] = $sub_array;
	}

	$fetchFeature = array(
		"draw"				=>	intval($_POST["draw"]),
		"recordsTotal"		=> 	$rowCount,
		"recordsFiltered"	=>	get_total_all_records(),
		"data"				=>	$data
	);
	echo json_encode($fetchFeature);
}


?>


