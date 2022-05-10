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
    <title>New Reservation</title>

    <style>
        #main {
            /* width: 200px;
            height: 200px; 
            border: 1px solid #c3c3c3; */
            width: 100%;
            height: 80%;
            border: 0px;
            display: flex;
            flex-wrap: wrap;
        }
        #main div {
            width: 50px;
            height: 750px;
            /* height: 200px; */
        }
    </style>
</head>

<body>
    <?php
    include("test_connect_db.php");
    session_start();
    $currentUser = $_SESSION['usuario'];
    $link = connectDataBase();
    $kontsulta1 = mysqli_query($link, "select * from cabin");
    $kontsulta2 = mysqli_query($link, "select * from reservation where cust_Username = '$currentUser'");
    ?>
    
    <!-- style='width:600px;float:right;margin-top:50px; margin-right:300px' -->
    <div style='width:600px;margin-top:50px; margin-right:300px; margin-left:50px'>
        <h1>ADD A NEW RESERVATION:</h1>
        <!--<form action="insertNewReservation.php" method="POST"> -->
        <form action="insertNewReservation.php" method="POST">
            <table>
                <tr>
                    <td>Customer: </td>
                    <td><?php echo $currentUser?></td>
                    <!-- <td>Password:<input name="password" type="password" size='8'></td> -->
                </tr>
                <tr>
                    <!-- https://stackoverflow.com/questions/47634469/how-to-populate-dropdown-menu-from-sql-table-in-php -->
                    <td>Cabin: </td>
                    <td>
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
    <br>
    <?php 
        // $kontsulta1 = mysqli_query($link, "select * from cabin");
        // $kontsulta2 = mysqli_query($link, "select * from reservation where cust_Username = '$currentUser'");
    ?>
    <div id="main">
        
        <div>
            <table style="text-align:center; margin-left:50px; " BORDER=1 CELLSPACING=10 CELLPADDING=10>
                <thead style="vertical-align:left">
                    <tr style="text-align:center">
                        <th>Cabin ID</th>
                        <th>Assistant</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price/Hour</th>
                        <th>Description</th>
                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($kontsulta1)) {
                        printf("<tr >
                                    <td>%s</td>
                                    <td>%d</td>
                                    <td>%.2f</td>
                                    <td>%s</td>
                                    <td>%.2f</td>
                                    <td>%s</td>
                                </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5]);
                    }
                    mysqli_free_result($kontsulta1);
                    //mysqli_close($link);
                    ?>

                </thead>
            </table>
        </div>
        
        <div>
            <table style="text-align:center; margin-left:900px" BORDER=1 CELLSPACING=10 CELLPADDING=10>
                <thead style="vertical-align:left">
                    <tr style="text-align:center">
                        <th>Reservation ID</th>
                        <th>Username</th>
                        <th>Cabin</th>
                        <th>Date</th>
                        <th>Starting Hour</th>
                        <th>Ending Hour</th>
                        <th>Amount Hours</th>
                        <th>Total Price</th>
                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($kontsulta2)) {
                        printf("<tr >
                                    <td>%d</td>
                                    <td>%s</td>
                                    <td>%s</td>
                                    <td>%s</td>
                                    <td>%s</td>
                                    <td>%s</td>
                                    <td>%d</td>
                                    <td>%.2f</td>
                                </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6], $erregistroa[7]);
                    }
                    mysqli_free_result($kontsulta2);
                    //mysqli_close($link);
                    ?>

                </thead>
            </table>
        </div>
    </div>
    


    
    

    

    <!--style='margin:auto;width:600px;margin-top:100px;' -->
    <!-- style='width:600px;float:left; padding:10%'-->
    <br><br>


    <!-- <div style="margin:0;width:100%;">
        <br><br><br><br><br><br><br><br>
    </div> -->




    <br>
    <br>

    <div id="main">
        <div style="background-color:coral;">A</div>
        <div style="background-color:lightblue;">B</div>
        <div style="background-color:khaki;">C</div>
        <div style="background-color:pink;">D</div>
        <div style="background-color:lightgrey;">E</div>
        <div style="background-color:lightgreen;">F</div>
        <div style="background-color:lightgrey;">E</div>
        <div style="background-color:lightgreen;">F</div>
        <div style="background-color:lightgrey;">E</div>
        <div style="background-color:lightgreen;">F</div>
    </div>

</body>
<br><br>

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

