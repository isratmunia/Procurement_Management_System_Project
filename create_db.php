<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    

    $conn = new mysqli($servername,$username,$password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "Connection Successful";
    }
    
    $create_db = "CREATE DATABASE forlogin";
    $result = $conn->query($create_db);

    if($result){
        echo"Database Created Successfully....";
    }
    else{
        die("Database not created..." . $conn->connect_error);
    }
?>