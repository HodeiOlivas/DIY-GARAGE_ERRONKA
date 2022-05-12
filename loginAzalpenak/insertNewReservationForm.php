<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>New Purchase Page</title>


</head>

<body>


    <!-- style='width:600px;float:right;margin-top:50px; margin-right:300px' -->
    <div style='width:600px;margin-top:50px; margin-right:300px; margin-left:50px'>
        <!-- style='margin:auto;width:600px;margin-top:50px;' -->
        <p>usar el mismo estilo que Delete Purchase</p>
        <h1>Add a new Reservation:</h1>
        <!--<form action="insertNewReservation.php" method="POST"> -->
        <form action="insertNewReservation.php" method="POST">
            <table>
                <tr>
                    <td>Customer's username:</td>
                    <td>
                        <input name="username" type="text" size='4'><br>
                    </td>
                    <!-- <td>Password:<input name="password" type="password" size='8'></td> -->
                </tr>
                <tr>
                    <td>Cabin: [C1, C2, C3, C4]</td>
                    <td><input name="cabin_id" type="text"><br></td>
                </tr>
                <td>
                    <!-- https://stackoverflow.com/questions/47634469/how-to-populate-dropdown-menu-from-sql-table-in-php -->
                    <form>
                        <select name="cabinChoices" class="custom-select mb-3">
                            <option selected>...</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                            <option value="C3">C3</option>
                            <option value="C4">C4</option>
                        </select>
                    </form>
                </td>
                <tr>
                    <td>
                        <form>
                            <select name="selectCabin" class="custom-select mb-3">
                                <option selected>...</option> 
                                <?php
                                include("test_connect_db.php");
                                $link = connectDataBase();
                                $sql = mysqli_query($link, "select distinct Cabin_ID from cabin order by 1 asc");
                                ?>

                                <!-- <option select name='ccc' value="<?php echo $row['Cabin_ID']; ?>"><?php echo $row['Cabin_ID']; ?></option> -->
                                
                                <?php
                                while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                        
                                        <option value="<?php echo $row['Cabin_ID']; ?>"><?php echo $row['Cabin_ID']; ?></option>
                                        <?php
                                        

                                    }
                                ?>
                                

                                

                                
                            </select>

                        </form>
                    </td>
                </tr>

                <tr>
                    <td>Purchase's Date:</td>
                    <td><input id="datepicker" type="date" name="reservationDate" placeholder="specify date" class="formAlign" style="display: table-cell;" /></td>
                </tr>
                <tr>
                    <td>Amount of hours:</td>
                    <td><input name="amount" type="number"><br></td>
                </tr>
                <tr>
                    <td>Starting Hour:</td>
                    <td><input name="start_hour" type="time"><br></td>
                </tr>
                <tr>
                    <td>Ending Hour:</td>
                    <td><input name="end_hour" type="time"><br></td>
                </tr>
                <tr>
                    <td><br><input name="send" type="submit" value="Add Reservation"></td>
                    <td><br><input type="reset" value="Clear"></td>
                </tr>
                <!-- echo "Today is " . date("Y-m-d") . "<br>"; -->
            </table>
        </form>
    </div>

    <br>
    <hr />

    <div style='width:600px;float:right;margin-top:25px; margin-right:300px'>
        <!-- style='margin:auto;width:600px;margin-top:50px;' -->
        <p>dwdq</p>
        <h1>Delete a purchase</h1>
        <!--<form action="insertNewPurchase.php" method="POST"> -->
        <form action="deletePurchase.php" method="POST">
            <table>
                <tr>
                    <td>Your username:</td>
                    <td><input name="username" type="text" size='4'><br></td>
                </tr>
                <tr>
                    <td>Date Original:</td>
                    <td><input name="datePurchase" type="text" size='4'><br></td>
                </tr>
                <tr>
                    <td>Purchase's Date:</td>
                    <td><input id="datepicker" type="date" name="purchaseDate" placeholder="specify date" class="formAlign" style="display: table-cell;" /></td>
                </tr>
                <tr>
                    <td>Purchase's Code:</td>
                    <td><input name="date" type="number" size="4"><br></td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <input name="send" type="submit" value="DELETE">
                    </td>
                    <td>
                        <br>
                        <input type="reset" value="CLEAR">
                    </td>
                    <td>
                        <br>
                        <button onclick=location.href="webErabiltzaileak.php">GO BACK</button>
                    </td>
                </tr>
                <!-- echo "Today is " . date("Y-m-d") . "<br>"; -->
            </table>
        </form>
    </div>

    <!--style='margin:auto;width:600px;margin-top:100px;' -->
    <!-- style='width:600px;float:left; padding:10%'-->
    <br><br><br><br><br><br><br><br>


    <div style="margin:0;width:100%;">
        <br><br><br><br><br><br><br><br>
    </div>




    <br>
    <br>



</body>

</html>


<!-- 
    LINKS INFO
    
https://www.plus2net.com/php_tutorial/php_drop_down_list.php    
https://stackoverflow.com/questions/45157149/creating-dropdown-list-from-sql-database-in-php 
-->


<!-- 
    require "config.php";// Database connection
//////////////////////////////
 if($r_set = $connection->query("SELECT * from student")){

echo "<select id=name name=name class='form-control' style='width:100px;'>";
while ($row = $r_set->fetch_assoc()) {
echo "<option value=$row[id]>$row[name]</option>";
}
echo "</select>";
}else{
echo $connection->error;
}

-->

