<!DOCTYPE html>
<html>
    <head>
        <title>Mechanical Head</title>
    </head>
    <body>
    <h2>Approved List</h2>
        <table >
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>

            <?php
            
            include "db_connection.php";
            
            $sql = "SELECT * FROM daily_requisition WHERE Status ='Approved' AND Department = 'electrical_department' ORDER BY ID ASC";
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

        <h2>Pending & Rejected List</h2>
        <table>
            <tr>
                <th>SL. NO</th>
                <th>Product_Name</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>

            <?php
            
            include "db_connection.php";
            
            $sql = "SELECT * FROM daily_requisition WHERE Status IN ('Pending','Rejected') AND Department = 'electrical_department' ORDER BY ID ASC";
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