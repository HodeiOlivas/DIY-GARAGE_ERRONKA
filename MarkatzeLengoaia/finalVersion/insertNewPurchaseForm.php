<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>New Purchase Page</title>

    <style>
        .table01 {
            width:550px;  /* adjust to desired wrapping */
            display:table;
            white-space: pre-wrap; /* css-3 */
            white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
            white-space: -pre-wrap; /* Opera 4-6 */
            white-space: -o-pre-wrap; /* Opera 7 */
            word-wrap: break-word; /* Internet Explorer 5.5+ */
        }

    </style>
</head>

<body>
    <!--style='margin:auto;width:600px;margin-top:100px;' -->
    <!-- style='width:600px;float:left; padding:10%'-->
    <div style='width:600px;float:left; padding:10%;'>
        <?php
        include("test_connect_db.php");
        session_start();
        $currentUser = $_SESSION['usuario'];
        $link1 = connectDataBase();
        $link2 = connectDataBase();
        $emaitza1 = mysqli_query($link1, "select * from purchase where cust_Username='$currentUser'");
        $emaitza2 = mysqli_query($link2, "select * from product");

        ?>
        
        <!-- <div class="container" style="margin-top: 200px;"> -->
        <!-- <div class="container"> -->
        <div class="container" style="width: 550px; margin-top:0px">

            <h2>Catalog of Products:</h2>
            <p>Here you can find information about the products available in the catalog. Check it! </p>
            <!-- <table style="text-align:center; margin-right:320px" align="right" BORDER=1 CELLSPACING=10 CELLPADDING=10> -->
            <table class="table table-dark" style="width: 550px; text-align:center; margin-left: 2px; table-layout:auto; " align="left" BORDER=1 CELLSPACING=10 CELLPADDING=10>
                <thead style="vertical-align:left">
                    <tr style="text-align:center">
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                    </tr>
                    
                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza2)) {
                        printf("<tr >
                                <td style='white-space: normal !important;'>%s</td>
                                <td>%s</td>
                                <td>%.2f</td>
                                <td style='text-align:left'>%s</td>
                            </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3]);
                    }
                    mysqli_free_result($emaitza2);
                    mysqli_close($link2);
                    ?>

                </thead>
            </table>
            
        </div>

        <div style="margin:auto;width:100%;margin-top:100px;">
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
        </div>

        <!-- <div class="container" style="margin-top: 200px;"> -->
        <!-- <div class="container"> -->
        <div class="container" style="margin-top: 200px; width: 550px;">
            <h2>Your Purchases:</h2>
            <p>Once the new purchase is created, it will appear in the purchase list on the main page. </p>
            <br>
            <table style="width: 550px; text-align:center; margin-left: 2px; table-layout:auto; " align="left" BORDER=1 CELLSPACING=10 CELLPADDING=10>
                <thead style="vertical-align:left">
                    <tr style="text-align:center">
                        <th>Purchase ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Final Cost</th>
                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza1)) {
                        printf("<tr >
                                <td>%d</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%d</td>
                                <td>%.2f</td>
                            </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5]);
                    }
                    mysqli_free_result($emaitza1);
                    mysqli_close($link1);
                    ?>

                </thead>
            </table>
        </div>

    </div>


    <pre>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </pre>

    <div style="margin:auto;width:100%;margin-top:100px;">
        <br><br><br><br><br><br><br><br>
        <hr />
    </div>


    <div style='width:600px;float:right;margin-top:50px; margin-right:300px'>
        <!-- style='margin:auto;width:600px;margin-top:50px;' -->
        <p>dwdq</p>
        <h1>Add a new purchase</h1>
        <!--<form action="insertNewPurchase.php" method="POST"> -->
        <form action="insertNewPurchase.php" method="POST">
            <table>
                <tr>
                    <td>Customer: </td>
                    <td><?php echo $currentUser?></td>
                    <!-- <td>Password:<input name="password" type="password" size='8'></td> -->
                </tr>
                <tr>
                    <!-- https://stackoverflow.com/questions/47634469/how-to-populate-dropdown-menu-from-sql-table-in-php -->
                    <td>Product: </td>
                    <td>
                        <form>
                            <select name="productChoices" class="custom-select mb-3" required>
                                <option selected>...</option>
                                <option value="EP06">EP06 - Exhaust Pipe</option>
                                <option value="FS90">FS90 - Front Spoiler</option>
                                <option value="MB11">MB11 - Metalic Bodywork</option>
                                <option value="PC32">PC32 - Painting Cans</option>
                                <option value="TS90">TS90 - Tire Set (x4)</option>
                            </select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td><input name="amountUnits" type="number" required><br></td>
                </tr>
                <tr>
                    <td>Purchase's Date (yyyy-mm-dd):</td>
                    <td><input id="datepicker" type="date" name="dateOfNewPurchase" placeholder="specify date" class="formAlign" style="display: table-cell;" required/></td>
                </tr>
                <tr>
                    <td><br><input name="send" type="submit" value="Add Purchase"></td>
                    <td><br><input type="reset" value="Clear"></td>
                </tr>
                <!-- echo "Today is " . date("Y-m-d") . "<br>"; -->
            </table>
        </form>
        <br>
        <br>
    </div>

    <br>
    <br>



</body>

</html>



<!--
Links info:
-   Responsive Flex-Box:
        https://www.w3schools.com/css/tryit.asp?filename=trycss3_flexbox_responsive 
    
-->