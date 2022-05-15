<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-size: 16px;
            height: 100%;
            padding: 10px 25px;
            /* margin-top: 150px; */
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: mediumslateblue;
            color: black;
        }
    </style>
</head>

<!-- <body style='margin:auto;width:600px;margin-top:100px;'> -->

<body>


    <?php
    include("test_connect_db.php");
    session_start();
    $currentUser = $_SESSION['usuario'];
    $todaysDate = date("Y-m-d");
    $defaultAmount = 1;

    $link = connectDataBase();
    $kontsulta = mysqli_query($link, "select * from purchase where Date = '$todaysDate' && cust_Username = '$currentUser'");

    // $kontsultDelete = mysqli_query($link,"select * from purchase");

    // $messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
    // echo "<script type='text/javascript' href='webErabiltzaileak.php'>alert('$messageAfterDeletePurchase');</script>";

    ?>
    <div class="">
    </div>
    <table class=" table table-dark" style="margin-top: 150px;text-align:center; width:70%; margin-left:auto; margin-right:auto;">
        <thead style="vertical-align:left">
            <tr style="text-align:center">
                <th>&nbsp;Purchase ID&nbsp;</th>
                <th>&nbsp;Username&nbsp;</th>
                <th>&nbsp;Product Code&nbsp;</th>
                <th>&nbsp;Date&nbsp;</th>
                <th>&nbsp;Amount&nbsp;</th>
                <th>&nbsp;Final Cost&nbsp;</th>
                <th>&nbsp;Cancel&nbsp;</th>
            </Tr>
            <?php
            while ($erregistroa = mysqli_fetch_array($kontsulta)) {
                printf("<tr>
                        <td>%d</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%d</td>
                        <td>%.2f</td>
						<td style='background-color:crimson'>
                          <a href='deleteAdvancedPurchaseCart.php?purchaseCartIdentifier=%d'>
                            <img src='../loginAzalpenak/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                        </td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[0]);
            }
            mysqli_free_result($kontsulta);
            ?>
        </thead>
    </table>

    <!-- <a href="webErabiltzaileak.php" style="margin-left:250px;">Back to Customer's page</a> -->
    <a href="sil1.php" style="margin-left:250px;">Back to Customer's page</a>

    <?php
    //header("Location: webErabiltzaileak.php");
    ?>

</body>

</html>


<!-- 
	$messageAfterDeletePurchase = " The specified purchase has been successfully deleted."; echo "<script type='text/javascript'>alert('$messageAfterDeletePurchase');</script>" ; -->