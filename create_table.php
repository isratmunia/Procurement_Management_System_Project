<?php

    include('db_connection.php');
    /*$sql = "CREATE TABLE user_info(
        Username VARCHAR(15) UNIQUE,
        Passwords INT(10) NOT NULL,
        rolename VARCHAR(14) NOT NULL,
        link Varchar(50)NOT NULL
        )";*/

        $sql = "CREATE TABLE info(
            Username VARCHAR(15) UNIQUE,
            Passwords TEXT(16) NOT NULL,
            rolename VARCHAR(14) NOT NULL,
            link VARCHAR(255) NOT NULL
            )";

    $result = $conn->query($sql);

    if ($result) {
        echo "<br>Table info created successfully";
    } 
    else {
        echo "Error creating table: " . $conn->error;
    }
$conn->close();
?>