<!DOCTYPE html>
<html>
    <head>
        <title>Project Head</title>
    </head>
    <body><!--
        <form>
            <div>
                <a href = "">Contacts</a>
                <a href = "">Requisition</a>
                <a href = "">Admin</a>
                <a href = "">Profile</a>
            </div>
            <table>
                <tr>
                    <th>Aproval Request</th>
                    <th>Delivered</th>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <th>In House Requisition</th>
                </tr>
            </table>
            <div>
                <a href = ""> Reports </a>
                <a href = ""> Notification </a>
                <a href = ""> Requisition </a>
            </div>
        </form>-->
        <!--<label>Add Member</label>-->
        <!--<a href = 'sign_up.php'>Add Member</a>-->
        <form action="" method = POST>
        <label>Add Member</label>
        <select name = "role" id = "role">
                    <option value = "jute_department">Head of Jute</option>
                    <option value = "production_department">Head of production</option>
                    <option value = "purchase_department">Head of Purchase</option>
                    <option value = "store_department">Head of Store</option>
                    <option value = "mechanical_department">Head of Mechanical</option>
                    <option value = "qc_department">Head of Q/C</option>
                    <option value = "electrical_department">Head of Electrical</option>
                </select>
                <input type = "email" name = "email" id = "email_id" value = "" placeholder = "Write your @email" required>

                    <button type = "submit">Send</button>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $to = $_POST['email'];

        }
        echo "email is:".$to;
            //$to = "recipient@example.com";
            $subject = "Welcome to the team";
            $message = "Please sign up by clicking following link  : http://localhost/PMS/sign_up.php";
            $headers = "sm.nizam.shuvo@gmail.com";

            // Use the mail() function to send the email
            mail($to, $subject, $message, $headers);

            //echo "Email sent successfully.";
        ?>
        
        <h2>Pending List for Approval</h2>
        <table >
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Urgency</th>
                <th>Department</th>
                <th>Order_Time</th>
                <th>Action</th>
            </tr>

            <?php
            //function pendingList(){
            include "db_connection.php";
            //function pendingList(){
            $sql = "SELECT * FROM daily_requisition WHERE Status ='Pending' ORDER BY ID ASC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>"."<td>".$row["ID"]."</td> ".
                        "<td>".$row["Product_Name"]."</td> ".
                        "<td>".$row["Quantity"]."</td> ".
                        "<td>".$row["Status"]."</td>".
                        "<td>".$row["Urgency"]."</td>".
                        "<td>".$row["Department"]."</td>".
                        "<td>".$row["Order_Time"]."</td>".
                        "<td>".
                        "<button>
                            <a href = 'approved.php?id={$row['ID']}'>Approve</a>
                        </button>"."&nbsp".
                        "<button>
                            <a href = 'rejected.php?id={$row['ID']}'>Reject</a>
                        </button>".
                        "</td>".
                        "</tr>";
                    } 
                }
            else{
                echo "There is no pending requisition";
            }

        //}
        //pendingList();

        ?>
        </table>

        <h2>Approved List</h2>
        <table >
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Urgency</th>
                <th>Department</th>
                <th>Order_Time</th>
            </tr>

            <?php
            
            include "db_connection.php";
            
            $sql = "SELECT * FROM daily_requisition WHERE Status ='Approved' ORDER BY ID ASC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>"."<td>".$row["ID"]."</td> ".
                        "<td>".$row["Product_Name"]."</td> ".
                        "<td>".$row["Quantity"]."</td> ".
                        "<td>".$row["Status"]."</td>".
                        "<td>".$row["Urgency"]."</td>".
                        "<td>".$row["Department"]."</td>".
                        "<td>".$row["Order_Time"]."</td>".
                        "</tr>";
                    } 
                }
            else{
                echo "There is no approved requisition";
            }
        ?>
        </table>

        <h2>Rejected List</h2>
        <table >
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Urgency</th>
                <th>Department</th>
                <th>Order_Time</th>
            </tr>

            <?php
            
            include "db_connection.php";
            
            $sql = "SELECT * FROM daily_requisition WHERE Status ='Rejected' ORDER BY ID ASC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>"."<td>".$row["ID"]."</td> ".
                        "<td>".$row["Product_Name"]."</td> ".
                        "<td>".$row["Quantity"]."</td> ".
                        "<td>".$row["Status"]."</td>".
                        "<td>".$row["Urgency"]."</td>".
                        "<td>".$row["Department"]."</td>".
                        "<td>".$row["Order_Time"]."</td>".
                        "</tr>";
                    } 
                }
            else{
                echo "There is no approved requisition";
            }
        ?>
        </table>

        <h2>Own Approved List</h2>
        <table >
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>

            <?php
            
            include "db_connection.php";
            
            $sql = "SELECT * FROM daily_requisition WHERE Status ='Approved' AND Department = 'project_head' ORDER BY ID ASC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>"."<td>".$row["ID"]."</td> ".
                        "<td>".$row["Product_Name"]."</td> ".
                        "<td>".$row["Quantity"]."</td> ".
                        "<td>".$row["Status"]."</td>".
                        "</tr>";
                    } 
                }
            else{
                echo "There is no approved requisition";
            }
        ?>
        </table>

        <h2>Own Pending & Rejected List</h2>
        <table>
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>

            <?php
            
            include "db_connection.php";
            
            $sql = "SELECT * FROM daily_requisition WHERE Status IN ('Pending','Rejected') AND Department = 'project_head' ORDER BY ID ASC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>"."<td>".$row["ID"]."</td> ".
                        "<td>".$row["Product_Name"]."</td> ".
                        "<td>".$row["Quantity"]."</td> ".
                        "<td>".$row["Status"]."</td>".
                        "</tr>";
                    } 
                }
            else{
                echo "There is no pending & rejected requisition";
            }
        ?>
        </table>
    </body>
</html>

