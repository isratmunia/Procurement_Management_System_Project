<?php

    include "db_connection.php";
    $id = $_GET["id"];

    $query = "UPDATE daily_requisition SET Status = 'Rejected' WHERE id = $id";
    $result = $conn->query($query);

    if ($result) {
        echo "Requisition Rejected";
    } 
    else {
        echo "Error updating record: " . $conn->error;
    }
?>