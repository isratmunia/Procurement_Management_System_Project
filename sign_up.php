<!DOCTYPE html>
<html>
    <head>
        <title>Procurement Management Sysetem</title>
    </head>
    <body>
        <form action = "store_db.php" method = "POST">
            <h2>Procurement</h2>
            <div class = "contain">
                <label>
                    <input type = "text" name = "name" id = "name_id" value = "" placeholder="User Name" required><br><br>
                    <input type = "email" name = "email" id = "user_email" value = "" placeholder="User Email" required><br><br>
                   <!-- <input type = "password" name = "password" id = "pass_id" value = "" placeholder="Password"><br><br>-->
                
                   <!-- $length = 8;

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
                            }

                            // Display the generated random password
                                echo "Your Password is: ".$randomPassword;
                ?>-->
                <select name = "role" id = "role">
                    <option value = "jute_department">Head of Jute</option>
                    <option value = "production_department">Head of production</option>
                    <option value = "purchase_department">Head of Purchase</option>
                    <option value = "store_department">Head of Store</option>
                    <option value = "mechanical_department">Head of Mechanical</option>
                    <option value = "qc_department">Head of Q/C</option>
                    <option value = "electrical_department">Head of Electrical</option>
                </select>
                <br><br>
                    <input type = "url" name = "user_link" id = "link_id" value = ""placeholder="Type url" required><br><br>
                    <button type = "submit">Sign Up</button>
                </label>
            </div>
        </form>
    </body>
</html>