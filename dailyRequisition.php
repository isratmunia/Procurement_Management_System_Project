<?php
include "db_connection.php";

$prod_name = $_POST['product_name'];
$prod_quantity = $_POST['quantity'];
$selected_role = $_POST['role'];
$urgency = $_POST['urgency'];

$sql1 = "INSERT INTO daily_requisition(Product_name,Quantity,Status,Urgency,Department)
                Values('$prod_name', $prod_quantity,'Pending','$urgency','$selected_role')";
        $data = $conn->query($sql1);

        if ($data) {
            echo "<br>New record created successfully";
        } 
        else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
?>