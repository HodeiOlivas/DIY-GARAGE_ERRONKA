<html>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <div>
        <?php
        include("test_connect_db.php");
        $username = $_POST["username"];
        $product = $_POST["product_Id"];
        $date = date("Y-m-d");  //echo "Today is " . date("Y-m-d") . "<br>";
        $quantity = $_POST["amount"];
        $link = connectDataBase();
        $emaitza = mysqli_query($link, "insert into purchase (cust_Username, prod_ID, Date, Amount) values('$username','$product', $date, $quantity)");   

        $kontsulta = mysqli_query($link, "select * from purchase");
        ?>
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
            <Tr>
                <th>&nbsp;Langilearen ID&nbsp;</th>
                <th>&nbsp;Izena-Abizena&nbsp;</th>
            </Tr>
            <?php
            while ($erregistroa = mysqli_fetch_array($kontsulta)) {
                printf("<tr><td>%d</td><td>%s</td></tr>", $erregistroa[0], $erregistroa[1]);
            }
            mysqli_free_result($kontsulta);
            ?>
        </table>
    </div>
    <br />
    <a href="index.php">Back to menu</a>
</body>

</html>