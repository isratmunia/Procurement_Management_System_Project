<?php

    include "db_connection.php";
    $id = $_GET["id"];

    $query = "UPDATE daily_requisition SET Status = 'Approved' WHERE id = $id";
    $result = $conn->query($query);

    if ($result) {
        echo "Recuisition Approved";
    } 
    else {
        echo "Error updating record: " . $conn->error;
    }
?>