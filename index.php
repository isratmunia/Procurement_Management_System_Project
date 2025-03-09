<!DOCTYPE html>
<html>
    <head>
        <title>Procurement Management Sysetem</title>
    </head>
    <body>
        <form action = "login.php" method = "POST">
            <h2>Procurement</h2>
            <div>
                <label>
                    <input type = "email" name = "user_name" id = "user_id" value = "" placeholder="Username" required><br><br>
                    <input type = "password" name = "password" id = "pass_id" value = "" placeholder="Password" required><br><br>

                <select name = "role" id = "role">
                    <option value = "project_head">Project Head</option>
                    <option value = "jute_department">Head of Jute</option>
                    <option value = "production_department">Head of production</option>
                    <option value = "purchase_department">Head of Purchase</option>
                    <option value = "store_department">Head of Store</option>
                    <option value = "mechanical_department">Head of Mechanical</option>
                    <option value = "qc_department">Head of Q/C</option>
                    <option value = "electrical_department">Head of Electrical</option>
                </select>
                <br><br>
                    <!--<input type = "submit" name = "sub_name" id = "sub_id" value = "Login">-->
                    <button type = "submit">Login</button>
                </label>
            </div>
        </form>
    </body>
</html>