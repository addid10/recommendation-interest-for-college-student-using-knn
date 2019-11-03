<?php
session_start();
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
	require_once('../../database/db.php');

	if(isset($_POST['id'])) {
        $id	   = $_POST['id'];
        $data  = '';

		$statement = $connection->prepare(
			"SELECT * FROM features 
            JOIN features_options USING(feature_id) WHERE feature_id=:id"
		);
		
		$statement->bindParam("id", $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        $data .= '
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Conversion</th>
                    <th>Delete</th>
                </tr>';

        foreach ($result as $row) {
            $data .= '
            
                <tr>
                    <td>'.$row->option_name.'</td>
                    <td>'.$row->option_value.'</td>
                    <td><button type="button" id="'.$row->feature_detail_id.'" class="btn btn-danger delete-option">&times;</button></td>
                </tr>
            ';
        }

        $data .= '
            </table>
        </div>';
        
        echo json_encode($data);
	}
}
?>