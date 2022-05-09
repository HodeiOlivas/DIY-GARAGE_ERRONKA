<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Worker's Website</title>

    <style>
        body {
            font-size: 16px;
            height: 100%;
            padding: 10px 25px;
            /* margin-left: 12px; */
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: -webkit-sticky;
            /* Safari */
            position: sticky;
            top: 0;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }

        h1 {
            padding: 10px 25px;
        }

        h2 {
            text-align: center;
        }


    </style>
</head>

<div class="container" style="text-align:left">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
    <div id="demo" class="collapse">
        <p>Image at the top (card-img-top):</p>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="../loginAzalpenak/img/encabezadoTaller1.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#start workers" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>
    <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            <img src="../loginAzalpenak/img/encabezadoTaller1.jpg" width="50%"> -->

</div>
</div>

<body>
    <br id="start workers">
    <h1> Welcome to Workers's website. </h1>
    <!-- <h1 style="margin-left: 80px;"> Welcome to Customer's website. </h1> -->

    <div class="header">
        <h2>WORKER</h2>
        <p>Scroll down to see the sticky effect.</p>
    </div>



    <ul>
        <li><a class="active" href="#start workers">Home</a></li>
        <li><a href="#cabins info">Cabins</a></li>
        <li><a href="#products info">Products</a></li>
        <li><a href="#reservations">Reservations</a></li>
        <li><a href="#purchases">Purchases</a></li>
        <li><a href="#registered customers">Customers</a></li>
        <li><a href="#workers">Workers</a></li>
        <li style="text-align:right"><a href="#..">Statistics</a></li>
        <li style="text-align:right"><a href="#...">About us</a></li>
        <li>

        </li>
    </ul>



    <br><br>
    <hr id="cabins info" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>Cabins' Information</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>


    <hr id="products info" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>Catalog of Products</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>

    <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
      <h1>Anything else?</h1>
      <p style="margin-left: 25px">Try to add, upadte or delete <strong>reservations</strong>! </p>

      <div class="hero-image" style="text-align: right;">
        <div class="hero-text">
          <button onclick=location.href="insertNewProductForm.php">New</button>
          <button onclick=location.href="index.php">Update</button>
          <button onclick=location.href="deleteReservationForm.php">Delete</button>
          <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
        </div>
      </div>
    </div>


    <hr id="reservations" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>All reservations</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>


    <hr id="purchases" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>Shopping history</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>


    <hr id="registered customers" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>Registered customers</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>
    <div>
        <?php
        include("test_connect_db.php");
        $link = connectDataBase();
        $emaitza = mysqli_query($link, "select * from customer");
        ?>
        <div class="container">
            <table class=" table table-dark">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Password</th>
                        <th>Birthday</th>
                        <th>Mail</th>
                        <th>Phone_Number</th>
                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza)) {
                        printf("<tr>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%d</td>
              </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6]);
                    }
                    mysqli_free_result($emaitza);
                    mysqli_close($link);
                    ?>
                </thead>
            </table>
        </div>
    </div>


    <hr id="workers" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>Garage's staff</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>


    <hr id="admin" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h3>Administrator</h3>
    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>


    <hr />



    <div>
        <?php
        //include("test_connect_db.php");
        $link = connectDataBase();
        $emaitza = mysqli_query($link, "select * from customer");
        ?>
        <div class="container">
            <h2>Registered users</h2>
            <p>The .table-dark class adds a black background to the table:</p>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Password</th>
                        <th>Birthday</th>
                        <th>Mail</th>
                        <th>Phone_Number</th>

                    </tr>

                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza)) {
                        printf("<tr>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%d</td>
              </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6]);
                    }
                    mysqli_free_result($emaitza);
                    mysqli_close($link);
                    ?>

                </thead>
            </table>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    </div>
    <br />



    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefixa.</p>




    <p>Image at the bottom (card-img-bottom):</p>
    <div >
        <br><br><br>
        <br><br><br>
        <br>
        <br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        </br>
        <br><br><br>
        <br><br><br>
        <br>
        <br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <p id="acabar">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    </div>



    <script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

</body>

</html>