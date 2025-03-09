<?php

    include "db_connection.php";
    ini_set('session.gc_maxlifetime', 300);
    session_start();

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $selected_role = $_POST['role'];

        }

        $sql = "SELECT * FROM $selected_role WHERE Email = '$user_name' && Password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
                $_SESSION['username'] = $row['username'];
                header("Location:".$row['URL']);
        }
        else{
            header('location:index.php');
            echo "Invalid Username or Password!";

        }
    //$conn->close();
?>