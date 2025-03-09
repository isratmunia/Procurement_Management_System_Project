<?php
    include "db_connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user_name = $_POST['name'];
        $email = $_POST['email'];
        $link = $_POST['user_link'];
        $selected_role = $_POST['role'];
    }
    //$password = $randomPassword;
    //echo "Password is: ".$randomPassword;
       // echo "Role is: ".$selected_role;
       //echo "URL is: ".$link;
        /*$length = 8;

                    // Define the characters to include in the password
                    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';

                    // Initialize an empty string to hold the random password
                    $randomPassword = '';

                    // Loop to generate the random password
                        for ($i = 0; $i < $length; $i++) {
                            // Use random index to select a character from the $characters string
                                $randomIndex = mt_rand(0, strlen($characters) - 1);
    
                            // Append the selected character to the random password
                                $randomPassword .= $characters[$randomIndex];
                            }*/

                            // Display the generated random password
                               // echo "Your Password is: ".$randomPassword;

        $sql1 = "INSERT INTO $selected_role(Name,Email,Password,Role,URL)
                Values('$user_name','$email','$randomPassword','$selected_role','$link')";
        $data = $conn->query($sql1);

        if ($data) {
            echo "<br>New record created successfully";
        } 
        else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
        
?>