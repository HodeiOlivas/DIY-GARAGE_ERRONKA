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
        $link = connectDataBase();
        $username00 = $_SESSION['usuario'];
        $cabin00 = $_POST["cabinChoices"];  //selected on a dropdown menu options

        $date0 = $_POST["reservationDate"];
        $date0 = str_replace('/', '-', $date0);
        $date1 = date("Y-m-d", strtotime($date0));

        // $amount_Hours = $_POST["amount"];
        $startHour = $_POST["start_hour"];
        $endHour = $_POST["end_hour"];


        //CALCULATE AMOUNT OF HOURS
        $starting_hourFINAL = $_POST["start_hour"];
        $ending_hourFINAL = $_POST["end_hour"];

        $time1 = explode(':', $starting_hourFINAL);  //starting hour
        $time1_h = (int)$time1[0];
        $time1_m = (int)$time1[1];

        $time2 = explode(':', $ending_hourFINAL);    //ending hour
        $time2_h = (int)$time2[0];
        $time2_m = (int)$time2[1];

        $time1_m_hour = $time1_m / 60;
        $time2_m_hour = $time2_m / 60;

        $Starting_hour = $time1_h + $time1_m_hour;
        $Ending_hour = $time2_h + $time2_m_hour;

        $amount_hoursFinal = $Ending_hour - $Starting_hour; //calculate the exact amount of hours (double)


        //CALCULATE TOTAL PRICE
        $price = mysqli_query($link, "SELECT Price_Hour FROM cabin WHERE Cabin_ID = '$cabin00'");
        $price_hour_cabin = mysqli_fetch_assoc($price);
        $total_priceFINAL = ((float)$price_hour_cabin['Price_Hour'] * (float)$amount_hoursFinal);



        //$date = date("Y-m-d");  //echo "Today is " . date("Y-m-d") . "<br>";

        // $link = connectDataBase();
        // $emaitza = mysqli_query($link, "insert into reservation (cust_Username, id_cabin, Date, Starting_Hour, Ending_Hour, Amount_Hours) 
        //                                         values('$username00', '$cabin00', '$date1', '$startHour', '$endHour', '$amount_Hours')");

        
        $emaitza = mysqli_query($link, "insert into reservation (cust_Username, id_cabin, Date, Starting_Hour, Ending_Hour, Amount_Hours, Total_Price) 
        values('$username00', '$cabin00', '$date1', '$starting_hourFINAL', '$ending_hourFINAL', '$amount_hoursFinal', '$total_priceFINAL')");


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
                                <td>%.2f</td>
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