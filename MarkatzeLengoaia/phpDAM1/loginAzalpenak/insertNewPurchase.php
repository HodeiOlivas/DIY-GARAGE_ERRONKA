<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>New Purchase</title>

    
</head>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <div>
        <?php
        include("test_connect_db.php");
        $username = $_POST["username"];
        $product = $_POST["product_Id"];
        //$date = date("Y-m-d");  //echo "Today is " . date("Y-m-d") . "<br>";

        $date00 = $_POST["dateOfInsert"];
        $date00 = str_replace('/', '-', $date00);
        $date11 = date("Y-m-d", strtotime($date00));

        $quantity = $_POST["amount"];

        $link = connectDataBase();
        $emaitza = mysqli_query($link, "insert into purchase (cust_Username, prod_ID, Date, Amount) values('$username','$product', '$date11', '$quantity')");

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





    </div>
    <br />
    <a href="webErabiltzaileak.php">Back to Customer's page</a>
</body>

</html>