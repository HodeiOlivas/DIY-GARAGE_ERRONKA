<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>Delete Reservation</title>


</head>

<body>


    <div style="margin:auto;width:100%;margin-top:30px;">
        <br><br><br><br><br><br><br><br>
        <hr />
    </div>

    <?php
    include("test_connect_db.php");
    session_start();
    $currentUser = $_SESSION['usuario'];
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

    ?>

    <div class="container">
        <!--style="float:left -->
        <h2>Your Reservations</h2>
        <p>The .table-dark class adds a black background to the table:</p>
        <table class="table table-dark" style="text-align:center">
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
                while ($erregistroa = mysqli_fetch_array($emaitza)) {
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
                mysqli_free_result($emaitza);
                mysqli_close($link);
                ?>

            </thead>
        </table>

        <div style='width:600px;float:right;margin-top:25px; margin-right:300px'>
            <!-- style='margin:auto;width:600px;margin-top:50px;' -->
            <p>dwdq</p>
            <h1>Delete a Reservation</h1>
            <!--<form action="insertNewPurchase.php" method="POST"> -->
            <form action="deleteReservation.php" method="POST">
                <table>
                    <tr>
                        <td>Your username:</td>
                        <td>
                            <input name="username" type="text" size='8'>&nbsp;&nbsp; Password: <input name="password" type="password" size='10'>
                        </td>
                        <br>
                    </tr>
                    <tr>
                        <td>Reservate's Date:</td>
                        <td><input id="datepicker" type="date" name="reservationDateDelete" placeholder="specify date" class="formAlign" style="display: table-cell;" /></td>
                    </tr>
                    <tr>
                        <td>Reservation's Code:</td>
                        <td><input name="reservationCodeDelete" type="text" size='2'><br></td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <input name="send" type="submit" value="DELETE">
                        </td>
                        <td>
                            <br>
                            <input type="reset" value="CLEAR">
                        </td>
                        <td>
                            <br>
                            <button onclick=location.href="webErabiltzaileak.php">GO BACK</button>
                        </td>
                    </tr>
                    <!-- echo "Today is " . date("Y-m-d") . "<br>"; -->
                </table>
            </form>
        </div>

        <pre>
        <br>
        <br>
        <br>
    </pre>


</body>

</html>