<?php
    session_start();

    if($_SESSION['username']){
        echo 'Welcome @'.$_SESSION['username'];
    }
    else{
        header('location:index.php');
    }
?>

<br>
<a href = 'logout.php'>logout</a>