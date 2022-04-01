<html>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <?php
    include("test_connect_db.php");
    $id = $_POST["emp_id"];
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "delete from langilea where langile_ID='$id'");

    $kontsulta = mysqli_query($link, "select * from langilea");
    ?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
        <Tr>
            <Th>&nbsp;Langilearen ID&nbsp;</Th>
            <Th>&nbsp;Izena-Abizena&nbsp;</Th>
        </Tr>
        <?php
        while ($erregistroa = mysqli_fetch_array($kontsulta)) {
            printf("<tr><td>%d</td><td>%s</td></tr>", $erregistroa[0], $erregistroa[1]);
        }
        mysqli_free_result($kontsulta);
        ?>
    </table>
    <br />
    <a href="index.php">Back to menu</a>

</body>

</html>