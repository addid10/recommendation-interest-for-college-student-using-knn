<?php
function get_total_all_records() {
	require('../../database/db.php');
	$statement = $connection->prepare("SELECT * FROM features");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}
?>