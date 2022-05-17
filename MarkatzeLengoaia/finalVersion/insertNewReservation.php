<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>New Reservation</title>

    <link rel="stylesheet" href="newreservationform.css">

</head>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <div>
        <?php
        include("test_connect_db.php");
        session_start();
        $username00 = $_SESSION['usuario'];
        $cabin00 = $_POST["cabinChoices"];  //selected on a dropdown menu options



        // $cabina11 = $_POST["selectCabin1"]; //dropdown menu with sql sentence
        //$cabina11 = $_POST["selectCabin"]; //dropdown menu with sql sentence

        // $selected = $_POST['selectCabin'];
        // if(isset($_POST["send"])) {
        //     if (!empty($_POST['selectCabin'])) {
        //         $selected = $_POST['selectCabin'];
        //         echo 'You have chosen: ' . $selected;
        //     } else {
        //         echo 'Please select.';
        //     }
        // }


        $date0 = $_POST["reservationDate"];
        $date0 = str_replace('/', '-', $date0);
        $date1 = date("Y-m-d", strtotime($date0));

        $amount_Hours = $_POST["amount"];
        $startHour = $_POST["start_hour"];
        $endHour = $_POST["end_hour"];

        //$date = date("Y-m-d");  //echo "Today is " . date("Y-m-d") . "<br>";

        $link = connectDataBase();
        $emaitza = mysqli_query($link, "insert into reservation (cust_Username, id_cabin, Date, Starting_Hour, Ending_Hour, Amount_Hours) 
                                                values('$username00', '$cabin00', '$date1', '$startHour', '$endHour', '$amount_Hours')");

        $kontsulta = mysqli_query($link, "select * from reservation where cust_Username = '$username00'");
        ?>
        <!-- <table style="text-align:center; margin-left:200px" align="right" BORDER=1 CELLSPACING=10 CELLPADDING=10> -->
        <table class="table table-dark" style="text-align:center; font-size:12px;">
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





    </div>
    <br />
    <a href="webCustomersFinal.php">Back to Customer's page</a>
</body>

</html>