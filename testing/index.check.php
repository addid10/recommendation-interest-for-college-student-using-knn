<?php

    if(isset($_SESSION['college_student_id'])) {
        require_once('../database/db.php');
        $userId = $_SESSION['college_student_id'];

        $newDatas = $connection->prepare(
            "SELECT COUNT(*) as total FROM testing_datas WHERE user_id=:id"
        );
        $newDatas->bindParam("id", $userId);
        $newDatas->execute();
        $total = $newDatas->fetchColumn();

    }

?>