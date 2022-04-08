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

<body >    
    <!--style='margin:auto;width:600px;margin-top:100px;' -->
    <!-- style='width:600px;float:left; padding:10%'-->
    <div style='width:600px;float:left; padding:10%;'>
        <?php
        include("test_connect_db.php");
        session_start();
        $currentUser = $_SESSION['usuario'];
        $link1 = connectDataBase();
        $link2 = connectDataBase();
        $emaitza1 = mysqli_query($link1, "select * from reservation where cust_Username='$currentUser'");
        $emaitza2 = mysqli_query($link2, "select * from product");
        
        ?>

        <div class="container">
            <h2>Your Reservations</h2>
            <p>Once you the new purchase is created, you should refresh the page to see it on the table. </p>
            <br>
            <table style="text-align:center; margin-left:200px" align="right" BORDER=1 CELLSPACING=10 CELLPADDING=10>
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
                        while ($erregistroa = mysqli_fetch_array($emaitza1)) {
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
                        mysqli_free_result($emaitza1);
                        mysqli_close($link1);
                    ?>

                </thead>
            </table>
        </div>

        <div style="margin:auto;width:100%;margin-top:100px;">
                <br><br><br><br><br><br>
        </div>

        <div class="container" style="margin-top: 200px;">
            
            <h2>Catalog of Products:</h2>
            <p>Check the information of the product you want to buy</p>
            <br>
            <table style="text-align:center; margin-right:320px" align="right" BORDER=1 CELLSPACING=10 CELLPADDING=10>
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
                                <td>%s</td>
                                <td>%s</td>
                                <td>%.2f</td>
                                <td>%s</td>
                            </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3]);
                        }
                        mysqli_free_result($emaitza2);
                        mysqli_close($link2);
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
        <hr/>
    </div>
    
    
    <div style='width:600px;float:right;margin-top:50px; margin-right:300px'>      <!-- style='margin:auto;width:600px;margin-top:50px;' -->
        <p>dwdq</p>
        <h1>Add a new purchase</h1>
        <!--<form action="insertNewPurchase.php" method="POST"> -->
        <form action="insertNewPurchase.php" method="POST">
            <table>
                <tr>
                    <td>Customer's username:</td>
                    <td><input name="username" type="text" size='4'><br></td>
                </tr>
                <tr>
                    <td>Product ID:</td>
                    <td><input name="product_Id" type="text"><br></td>
                    <td>    <!-- https://stackoverflow.com/questions/47634469/how-to-populate-dropdown-menu-from-sql-table-in-php -->
                        <form action="/action_page.php">
                            <select name="cars" class="custom-select mb-3">
                                <option selected>Custom Select Menu</option>
                                <option value="volvo">Volvo</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td><input name="amount" type="number"><br></td>
                </tr>
                <tr>
                    <td><input name="bidali" type="submit" value="INSERTATU"></td>
                    <td><input type="reset" value="GARBITU"></td>
                </tr>
                <!-- echo "Today is " . date("Y-m-d") . "<br>"; -->
            </table>
        </form>
    </div>

    <pre>
        <br>
        <br>
        <br>
    </pre>
    
    
</body>

</html>