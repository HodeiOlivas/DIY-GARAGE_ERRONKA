<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="newreservationform.css">



    <title>New Reservation</title>

    <style>
        body {
            max-width: 100%;
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
            background-color: #53667A;
        }

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
    <div class="p-5 mx-5">

        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="font-weight-bold text-white m-0 tracking">Add a new reservation:</h1>
                <p class="font-weight-bold gray-light h5 tracking">Fill out your info to make a reservation</p>
            </div>
            <div>
                <a href="webCustomersFinal.php">
                    <button class="btn btn-warning text-white">Atzera</button>
                </a>
            </div>
        </div>
        <hr>

        <form id="form-container" action="insertNewReservation.php" method="POST">
            <!-- customer / cabin -->
            <div class="form-row w-50 mt-5">
                <div class="col form-group">
                    <label for="currentUser" class="text-uppercase font-weight-bold gray-light tracking fs-6">Customer</label>
                    <input type="text" id="currentUser" class="form-control form-bg-blue text-white" disabled placeholder="<?php echo $currentUser ?>">
                </div>
                <div class="col form-group">
                    <label for="currentUser" class="text-uppercase font-weight-bold gray-light tracking fs-6">Cabin</label>
                    <select name="cabinChoices" class="custom-select form-bg-blue text-white mb-3">
                        <option selected>...</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                        <option value="C3">C3</option>
                        <option value="C4">C4</option>
                    </select>
                </div>
            </div>

            <!-- purchase date / hours -->
            <div class="form-row w-50">
                <div class="col form-group">
                    <label for="datepicker" class="text-uppercase font-weight-bold gray-light tracking fs-6">purchase date</label>
                    <input id="datepicker" type="date" name="reservationDate" placeholder="specify date" class="formAlign custom-select-date" />
                </div>
                <div class="col form-group">
                    <label for="currentUser" class="text-uppercase font-weight-bold gray-light tracking fs-6">Amount of hours</label>
                    <input name="amount" type="number" class="custom-select-date">
                </div>
            </div>
            <!-- start hours -->
            <div class="form-row w-50 mt-3">
                <div class="col form-group">
                    <label for="start_hour" class="text-uppercase font-weight-bold gray-light tracking fs-6">Start hour</label>
                    <input name="start_hour" type="time" class="custom-select-date">
                </div>
            </div>
            <!-- end hours -->
            <div class="form-row w-50 mt-1">
                <div class="col form-group">
                    <label for="end_hour" class="text-uppercase font-weight-bold gray-light tracking fs-6">Ending hour</label>
                    <input name="end_hour" type="time" class="custom-select-date">
                    <small class="form-text gray-light font-weight-bold tracking">Click on the clock icon to select a time!</small>

                </div>
            </div>
            <!-- buttons -->
            <div class="form-group w-50 text-right">
                <input class="btn btn-success mr-4" name="send" type="submit" value="Add Reservation">
                <input class="btn btn-outline-danger" type="reset" value="Clear">
            </div>
        </form>

    </div>

    <div class="p-5 mx-5">
        <div>
            <?php
            //include("test_connect_db.php");
            $currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

            ?>
            <!--style="float:left -->

            <br>
            <hr />
            <h4 class="font-weight-bold text-left mb-4" style="color:white;">Your reservations:</h4>
            <p>Here you can check all the reservations you've done so far.</p>

            <!-- <table class="table table-blue rounded-lg tableMove" style="width:80%;text-align:center;margin-left:auto; margin-right:50%;"> -->
            <table class="table table-blue rounded-lg tableMove" style="text-align:center;margin-left:auto; margin-right:50%;">
                <colgroup>
                    <col span="1" style="background-color:greenyellow">
                </colgroup>
                <thead style="vertical-align:left" class="">
                    <tr style="text-align:center">
                        <th style="color:black;">Reservation ID</th>
                        <th>Username</th>
                        <th>Cabin</th>
                        <th>Date</th>
                        <th>Starting Hour</th>
                        <th>Ending Hour</th>
                        <th>Amount Hours</th>
                        <th>Total Price</th>
                        <th>Manage</th>
                    </tr>
                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza)) {
                        printf("<tr >
                        <td style='color:black;'>%d</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%d</td>
                        <td>%.2f</td>
                        <td>
                          <a href='deleteAdvancedReservation.php?reservationIdentifier=%s'>
                            <img src='../finalVersion/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                        </td>
                      </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6], $erregistroa[7], $erregistroa[0]);
                    }
                    mysqli_free_result($emaitza);
                    mysqli_close($link);
                    ?>
                </thead>
            </table>
            <br>
        </div>
    </div>

    <br>
    <hr />
    <br>
    <div class="p-5 mx-5">
        <div>
            <?php
            //include("test_connect_db.php");
            //$currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from cabin");

            ?>
            <h4 class="font-weight-bold text-left mb-4" style="color:white;">All the cabins:</h4>
            <p>The .table-dark class adds a black background to the table:</p>
            <!-- <table class="table table-dark" style="text-align:center; width:auto; margin-left:auto; margin-right:auto;"> -->
            <table class="table table-blue rounded-lg tableMove" style="text-align:center;margin-left:auto; margin-right:50%;">
                <colgroup>
                    <col span="1" style="background-color:greenyellow">
                </colgroup>
                <thead style="vertical-align:left">
                    <tr style="text-align:center">
                        <th>Cabin ID</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price Hour</th>
                        <th>Description</th>
                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza)) {

                        printf("<tr>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td style='text-align:left;width:auto;'>%s</td>
                      </tr>", $erregistroa[0], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5]);
                    }
                    mysqli_free_result($emaitza);
                    mysqli_close($link);
                    ?>

                </thead>
            </table>
        </div>
    </div>

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