<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Delete Reservation</title>



</head>

<body style='margin:auto;width:80%;margin-top:100px;'>


    <?php
    session_start();
    include("test_connect_db.php");
    // printf($_SESSION['usuario']);
    ?>

    <h3>Current reservations of:
        <?php
        echo  $_SESSION['usuario'];
        ?>
    </h3>


    <?php
    //echo "Welcome, " . $_SESSION['usuario'];
    $username = $_SESSION["usuario"];
    $rentCode = $_POST["reservationCodeDelete"];

    $date0 = $_POST["reservationDateDelete"];
    $date0 = str_replace('/', '-', $date0);
    $date1 = date("Y-m-d", strtotime($date0));

    $link = connectDataBase();
    $emaitza = mysqli_query($link, "delete from reservation where id_Reservation= '$rentCode' and Date= '$date1'");

    $kontsulta = mysqli_query($link, "select * from reservation where cust_Username = '$username'");

    ?>
    <table class="table table-dark" style="text-align:center; font-size:12px">
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
            while ($erregistroa = mysqli_fetch_array($kontsulta)) {
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
            mysqli_free_result($kontsulta);
            mysqli_close($link);
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