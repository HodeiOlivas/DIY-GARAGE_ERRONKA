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



    <title>New Purchase</title>

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
    $todaysDate = date("Y-m-d");
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

        <form id="form-container" action="insertNewPurchase.php" method="POST">
            <!-- customer / cabin -->
            <div class="form-row w-50 mt-5">
                <div class="col form-group">
                    <label for="currentUser" class="text-uppercase font-weight-bold gray-light tracking fs-6">Customer</label>
                    <input type="text" id="currentUser" class="form-control form-bg-blue text-white" disabled placeholder="<?php echo $currentUser ?>">
                </div>
                <div class="col form-group">
                    <label for="currentUser" class="text-uppercase font-weight-bold gray-light tracking fs-6">Product</label>
                    <select name="productChoices" class="custom-select form-bg-blue text-white mb-3">
                        <option selected>...</option>
                        <option value="EP06">EP06 - Exhaust Pipe</option>
                        <option value="FS90">FS90 - Front Spoiler</option>
                        <option value="MB11">MB11 - Metalic Bodywork</option>
                        <option value="PC32">PC32 - Painting Cans</option>
                        <option value="TS90">TS90 - Tire Set (x4)</option>
                    </select>
                </div>
            </div>

            <!-- purchase date / hours -->
            <div class="form-row w-50">
                <div class="col form-group">
                    <label for="datepicker" class="text-uppercase font-weight-bold gray-light tracking fs-6">purchase date</label>
                    <input id="datepicker" type="date" name="dateOfNewPurchase" placeholder="specify date" class="formAlign custom-select-date" />
                </div>
                <div class="col form-group">
                    <label for="currentUser" class="text-uppercase font-weight-bold gray-light tracking fs-6">Amount</label>
                    <input name="amountUnits" type="number" class="custom-select-date">
                </div>
            </div>
            <!-- buttons -->
            <div class="form-group w-50 text-right">
                <input class="btn btn-success mr-4" name="send" type="submit" value="Add Purchase">
                <input class="btn btn-outline-danger" type="reset" value="Clear">
            </div>
        </form>

    </div>

    <div class="p-5 mx-5">
        <div>
            <?php
            //include("test_connect_db.php");
            //$currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from purchase where cust_Username = '$currentUser'");

            ?>
            <h4 class="font-weight-bold text-left mb-4" style="color:white;">Your current purchases:</h4>
            <p>Check the purchases you've done so far.</p>
            <table class="table table-blue rounded-lg tableMove" style="text-align:center;margin-left:auto; margin-right:50%;">
                <colgroup>
                    <col span="1" style="background-color:greenyellow">
                </colgroup>
                <thead style="vertical-align:left">
                    <tr style="text-align:center">
                        <th style="color:black;">Purchase ID</th>
                        <th>Username</th>
                        <th>Product Code</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Final Cost</th>
                        <th>Manage</th> <!-- Column to manage each record (in this case, the purchases) -->
                        <!-- <img src='deleteImage.png' id='argazkia' height=200px></img> -->
                        <!-- <img src='../finalVersion/img/deleteImage.png' id='argazkia'></img> -->
                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza)) {
                        printf("<tr >
                      <td style='color:black;'>%d</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%d</td>
                      <td>%.2f</td>
                      <td>
                          <a href='deleteAdvanced.php?purchaseIdentifier=%s'>
                            <img src='../finalVersion/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                      </td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[0]);
                    }
                    //mysqli_close($link);
                    ?>

                </thead>
            </table>
        </div>
    </div>

    <hr />
    <div class="p-5 mx-5">
        <div>
            <?php
            //include("test_connect_db.php");
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from product");
            ?>
            <h4 class="font-weight-bold text-left mb-4" style="color:white;">Catalog of products:</h4>
            <p>Check here information about every single product we have on our catalog.</p>
            <table class="table table-blue rounded-lg tableMove" style="text-align:center;margin-left:auto; margin-right:50%;">
                <colgroup>
                    <col span="1" style="background-color:greenyellow">
                </colgroup>
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price €</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <?php
                while ($erregistroa = mysqli_fetch_array($emaitza)) {
                    printf("<tr>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%.2f</td>
                        <td style='text-align:left;vertical-align:middle;width:500px;'>%s</td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3]);
                }
                mysqli_free_result($emaitza);
                //mysqli_close($link);
                ?>

                <!-- </thead> -->
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