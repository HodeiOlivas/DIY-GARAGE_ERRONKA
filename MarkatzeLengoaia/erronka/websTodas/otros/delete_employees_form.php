<html>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <div>
        <?php
        include("test_connect_db.php");
        $link = connectDataBase();
        $emaitza = mysqli_query($link, "select * from langilea");
        ?>
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
            <Tr>
                <Td>LANGILE ID</Td>
                <Td>Izena-Abizena</Td>
            </Tr>
            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {
                printf("<tr><td>%d</td><td>%s</td></tr>", $erregistroa[0], $erregistroa[1]);
            }
            mysqli_free_result($emaitza);
            mysqli_close($link);
            ?>
        </table>
    </div>
    <h1>Langileak Ezabatu:</h1>

    <p> Ezabatuko den langilearen ID-a </p>
    <form action="delete_employees.php" method="POST">
        <h4>
            ID:<input name="emp_id" type="text"><br><br>
            <input name="bidali" type="submit" value="EZABATU">
            <input type="reset" value="Garbitu">
        </h4>
    </form>

</body>

</html>