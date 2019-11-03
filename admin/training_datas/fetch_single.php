<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST["id"])) {
		$id 	 = $_POST['id'];

		$statement = $connection->prepare(
			"SELECT * FROM training_datas t 
            JOIN training_datas_results r ON t.user_id = r.user_id
            JOIN features f ON f.feature_id = t.feature_id 
            JOIN users u ON u.user_id = t.user_id 
            WHERE t.user_id=:id
            ORDER BY length(feature_variable), feature_variable"
		);
		$statement->bindParam("id", $id);
		$statement->execute();
        $fetchData = $statement->fetchAll(PDO::FETCH_OBJ);
        

		$results    = array();
        $features   = array();
        $i = 0;
        foreach($fetchData as $row ) {
            
            $results[]           = $row->score;
            $results["fullname"] = $row->fullname;
            $results["length"]   = $i++;
    
        }
        echo json_encode($results);
	}
}
?>