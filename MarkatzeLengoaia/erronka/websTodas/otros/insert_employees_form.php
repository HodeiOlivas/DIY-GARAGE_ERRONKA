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

    <h1>Gehitu Langileak:</h1>
    <form action="insert_employees.php" method="POST">
        <table>
            <tr>
                <td>Langilearen ID-a:</td>
                <td><input name="emp_id" type="text" size='4'><br></td>
            </tr>
            <tr>
                <td>Izena-Abizena:</td>
                <td><input name="emp_name" type="text"><br></td>
            </tr>
            <tr>
                <td><input name="bidali" type="submit" value="INSERTATU"></td>
                <td><input type="reset" value="GARBITU"></td>
            </tr>
        </table>
    </form>
</body>

</html>