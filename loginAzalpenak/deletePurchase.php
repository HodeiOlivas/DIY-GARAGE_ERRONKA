<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Delete Purchase</title>

    

</head>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <?php
    include("test_connect_db.php");
    $username = $_POST["username"];
    //$date = date("Y-m-d");  //echo "Today is " . date("Y-m-d") . "<br>";

    //$datePrueba = strtotime($_POST["datePurchase"]);
    // $datePruebaValue = date('Y-m-d', $date0);

    $date0 = $_POST["purchaseDate"];
    $date0 = str_replace('/','-', $date0);
    $date1 = date("Y-m-d", strtotime($date0));

    $purchaseDate = $_POST["purchaseDate"];
    $purchaseCode = $_POST["date"];

    $link = connectDataBase();
    $emaitza = mysqli_query($link, "delete from purchase where cust_Username='$username' and id_Purchase = '$purchaseCode' and Date= '$date1'");

    $kontsulta = mysqli_query($link, "select * from purchase where cust_Username = '$username'");

    ?>
    <table class="table table-dark" style="text-align:center; font-size:12px">
        <thead style="vertical-align:left">
            <Tr style="text-align:center; font-size:12px">
                <th>&nbsp;Purchase ID&nbsp;</th>
                <th>&nbsp;Username&nbsp;</th>
                <th>&nbsp;Product Code&nbsp;</th>
                <th>&nbsp;Date&nbsp;</th>
                <th>&nbsp;Amount&nbsp;</th>
                <th>&nbsp;Final Cost&nbsp;</th>
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
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5]);
            }
            mysqli_free_result($kontsulta);
            ?>
        </thead>
    </table>
    <br />
    <a href="webErabiltzaileak.php">Back to menu</a>

</body>

</html>


<!-- <input id="datepicker" type="date" name="jaiotze_data" placeholder="sartu jaiotze data" class="formAlign" style="display: table-cell;" /> -->

<!-- 
    $day1 = strtotime($_POST["date1"]);
$day1 = date('Y-m-d H:i:s', $day1); //now you can save in DB
-->