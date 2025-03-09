<!DOCTYPE html>
<html>
    <head>
        <title>Requisition</title>
    </head>
    <body>
        <form action = 'dailyRequisition.php' method = 'POST'>
            <div>
                <label>
                    Product Name 
                </label>
                <br>
                    <input type = "text" name = "product_name" id = "product_id" value = ""><br>
                <label>
                    Quantity 
                </label>
                <br>
                    <input type = "number" name = "quantity" id = "quantity_id" value = ""><br><br>
                    <!--<input type = "text" name = "dept_name" id = "dept_id" value = ""><br><br>-->
                    <select name = "role" id = "role">
                        <option value = "" disble selected hidden>Select Role</option>
                        <option value = "project_head">Project Head</option>
                        <option value = "jute_department">Head of Jute</option>
                        <option value = "production_department">Head of production</option>
                        <option value = "purchase_department">Head of Purchase</option>
                        <option value = "store_department">Head of Store</option>
                        <option value = "mechanical_department">Head of Mechanical</option>
                        <option value = "qc_department">Head of Q/C</option>
                        <option value = "electrical_department">Head of Electrical</option>
                    </select><br><br>
                    <label>Urgency</label><br>
                        <select name = "urgency" id = "urgency">
                            <option value = "" disble selected hidden>Select Your Urgency</option>
                            <option value = "High">High</option>
                            <option value = "Medium">Medium</option>
                            <option value = "Low">Low</option>
                        </select><br><br>
                    <input type = "submit" name = "submit_name" id = "submit_id" value = "Submit">
            </div>
        </form>
    </body>
</html>