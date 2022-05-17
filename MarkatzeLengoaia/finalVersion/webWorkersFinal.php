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

    <link rel="stylesheet" href="sil1C.css">

    <!-- Google font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <title>Customer's Website</title>

    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
        }

        body {
            font-size: 16px;
            height: 100%;
            /* padding: 10px 25px; */
            /* background-color: white; */
            /* 8B0000 */
            /* 991F36 */
            /* margin-left: 12px; */
            padding: 10px 25px;
        }

        html {
            height: 100%;
        }

        .parallax {
            /* background-image: url("img/encabezadoTaller3.jpg"); */
            background-image: url("img/fondoF1_1.jpg");
            height: 100%;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #256;
            /*#333*/
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
            background-color: white;
            /* background-color: lightgrey; */
            /*#111*/
        }

        .active {
            background-color: slategray;
            /*#4CAF50*/
        }

        /* h1 {
      padding: 10px 25px;
    } */

        h2 {
            text-align: center;
        }

        .cardProduct {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 0;
            /* padding-left: 10px 25px; */
            text-align: center;
            font-family: arial;
            background-color: green;
        }

        #rcorners2 {
            border-radius: 25px;
            border: 2px solid #73AD21;
            padding: 20px;
            width: 100%;
            height: auto;
            background: rgb(223, 228, 237);

            /* height: 150px;   */
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: mediumslateblue;
            color: black;
        }
    </style>
</head>

<!-- <body class="specificBody"> -->



<body class="primary-bg" style="font-size: 16px; width:100%; height: 100%; padding: 10px 25px;">
    <!-- Display current logged in user -->

    <?php session_start();
    ?>
    <!-- image -->
    <div class="container">
        <img src="img/garagebg2.jpg" alt="" id="mainPageImage">
        <p class="image-text-primary h3 fw-bold">

        </p>
        <p class="image-text-secondary h1">Welcome worker, To (Y)our DIY garage!</p>
        <!-- logo in middle -->
        <div class="circle cream-bg">
            <h4 class="mt-3">
                <i class="bi bi-tools primary-colour"></i>
            </h4>
        </div>
        <!-- !logo in middle -->

        <!-- navbar -->
        <div class="row image-nav">
            <div class="col">
                <!-- start nav -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse ml-5" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#productsAll">Products</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#cabinsAll">Cabins</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#reservationsAll">Reservations</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#purchasesAll">Purchases</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#customersAll">Customers</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#workersAll">Staff</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- !navbar -->


    </div>


    <hr class="cream-bg m-0">


    <!-- table reservations -->
    <div class="px-5 mx-5">
        <?php
        include("test_connect_db.php");
        $currentUser = $_SESSION['usuario'];
        $link = connectDataBase();
        $emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

        ?>

        <div class="d-flex w-100">
            <div class="col text-right mt-5">
                <h1><a href="webWorkersFinal.php">
                        <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow">
                            Ask a question <i class="bi bi-telephone"></i>
                        </button>
                    </a></h1>
            </div>
        </div>

        <div class="row mt-4" id="test">
            <div class="col-6 pl-4 ">
                <h1 class="text-left text-white font-weight-bold">Repair any problems you might have at <span class="text-success">The HALAB Garage</span>.</h1>
                <h4 class="colour-secondary font-weight-bold text-left">Lets have a quick look.</h4>
            </div>
        </div>
    </div>





    <br>
    <hr id="cabinsAll" /><br><br> <!-- beginning of CABINS INFORMATION -->
    <?php
    //include("test_connect_db.php");
    //$currentUser = $_SESSION['usuario'];
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from cabin");

    ?>
    <h2 style="color:white;">CABIN'S INFORMATION</h2>
    <br>
    <table class="table table-dark" style="text-align:center; width:80%; margin-left:auto; margin-right:auto;">
        <thead style="vertical-align:left">
            <tr style="text-align:center">
                <th>Cabin ID</th>
                <th>Size</th>
                <th>Color</th>
                <th>Price Hour</th>
                <th>Description</th>
            </tr>

            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {

                printf("<tr>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td style='text-align:left;width:auto;'>%s</td>
                      </tr>", $erregistroa[0], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5]);
            }
            mysqli_free_result($emaitza);
            mysqli_close($link);
            ?>

        </thead>
    </table>
    <br>
    <div class="" style="text-align:center">
        <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <br><br>
    </div>



    <hr id="productsAll" /><br><br> <!-- beginning of CABINS INFORMATION -->
    <?php
    //include("test_connect_db.php");
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from product");
    ?>
    <h2 style="color:white;">ALL THE PRODUCTS</h2>
    <br>
    <table class="table table-dark" style="text-align:center; width:80%; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Manage</th>
            </tr>
        </thead>
        <?php
        while ($erregistroa = mysqli_fetch_array($emaitza)) {
            printf("<tr>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%.2f</td>
                        <td style='text-align:left;vertical-align:middle;'>%s</td>
                        <td style='vertical-align:middle'><img src=%s width='200' height='90'><br></td>
                        <td style='vertical-align:middle'>
                          <a href='deleteProduct.php?productDeleteIdentifier=%s'>
                            <img src='../finalVersion/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                        </td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa['id_Product']);
        }
        mysqli_free_result($emaitza);
        //mysqli_close($link);
        ?>

        <!-- </thead> -->
    </table>

    <div class="jumbotron text-left" style="text-align:center; width: 80%; margin-bottom:0; color:black; margin-left:auto; margin-right:auto;">
        <h1 style="text-align:center">Anything else?</h1>
        <p style="text-align:center">Try to add a new <strong>product</strong> to the Catalog of the garage! </p>
        <div class="hero-image" style="text-align: center;">
            <div class="hero-text">
                <button onclick=location.href="insertNewProductForm.php" style="width: 20%;">New</button>
            </div>
        </div>
    </div>
    <br>



    <hr id="reservationsAll" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h2 style="color:white;">ALL THE RESERVATIONS</h2>
    <br><br>
    <?php
    //include("test_connect_db.php");
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from reservation");
    ?>
    <table class="table table-dark" style="text-align:center; width:80%; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th>Reservation ID</th>
                <th>Username</th>
                <th>Cabin</th>
                <th>Date</th>
                <th>Starting Hour</th>
                <th>Ending Hour</th>
                <th>Amount Hours</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <?php
        while ($erregistroa = mysqli_fetch_array($emaitza)) {
            printf("<tr>
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
        mysqli_free_result($emaitza);
        //mysqli_close($link);
        ?>

        <!-- </thead> -->
    </table>
    <br>
    <div class="" style="text-align:center">
        <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <br><br>
    </div>


    <hr id="purchasesAll" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h2 style="color:white;">ALL CURRENT PURCHASES</h2>
    <br><br>
    <?php
    //include("test_connect_db.php");
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from purchase");
    ?>
    <table class="table table-dark" style="text-align:center; width:80%; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th>Purchase ID</th>
                <th>Username</th>
                <th>Product Code</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Final Cost</th>
            </tr>

            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {
                printf(
                    "<tr>
                <td>%d</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%d</td>
                      <td>%.2f</td>
              </tr>",
                    $erregistroa[0],
                    $erregistroa[1],
                    $erregistroa[2],
                    $erregistroa[3],
                    $erregistroa[4],
                    $erregistroa[5]
                );
            }
            mysqli_free_result($emaitza);
            //mysqli_close($link);
            ?>
        </thead>
    </table>
    <br>
    <div class="" style="text-align:center">
        <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <br><br>
    </div>



    <hr id="customersAll" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <h2 style="color:white;">REGISTERED CUSTOMERS</h2>
    <br><br>
    <?php
    //include("test_connect_db.php");
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from customer");
    ?>
    <table class="table table-dark" style="text-align:center; width:80%; margin-left:auto; margin-right:auto;">
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
            //mysqli_close($link);
            ?>
        </thead>
    </table>
    <br>
    <div class="" style="text-align:center">
        <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <br><br>
    </div>



    <hr id="workersAll" /><br>
    <!--dirigir al apartado de las cabinas -->
    <h2 style="color:white;">COMPANY'S STAFF</h2>
    <br><br>
    <?php
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from worker");
    ?>
    <table class="table table-dark" style="text-align:center; width:80%; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th>Worker ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Password</th>
                <th>Occupation</th>
                <th>Mail</th>
                <th>Contact</th>
                <th>Salary</th>
                <th>Start Time</th>
                <th>Finish Time</th>
            </tr>

            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {
                printf(
                    "<tr>
                        <td>%d</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%d</td>
                        <td>%.2f</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>",
                    $erregistroa['Worker_ID'],
                    $erregistroa['Name'],
                    $erregistroa['Surname'],
                    $erregistroa['Password'],
                    $erregistroa['Occupation'],
                    $erregistroa['Mail'],
                    $erregistroa['Phone_Number'],
                    $erregistroa['Salary'],
                    $erregistroa['Start_time'],
                    $erregistroa['Finish_time']
                );
            }
            mysqli_free_result($emaitza);
            //mysqli_close($link);
            ?>
        </thead>
    </table>

    <br>
    <div class="" style="text-align:center">
        <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <br><br>
    </div>



    <div>
        <br><br><br><br>
        <hr id="profile info" /><br><br>
        <p id="acabar">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
        <!--dirigir al apartado de las cabinas -->
        <h3 style="text-align: left;">Profile Info</h3>
        <p style="text-align: left;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
        <p style="text-align: left;"><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
        <br><br>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                //trigger: 'focus',
                trigger: 'hover',
                html: true,
                content: function() {
                    return '<img class="img-fluid" src="' + $(this).data('img') + '" />';
                },
                title: 'Toolbox'
            })
        });
    </script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>


</body>

</html>

<script>
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>



<!-- 
  jquery add edit delete - https://www.javatpoint.com/add-edit-delete-table-row-in-jquery
 -->


<!-- 
  <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Dropdown button
        </button>
        <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
          <h1>Anything else?</h1>
          <p style="margin-left: 25px">Try to add, upadte or delete pruchases! </p>
          <div class="hero-image" style="text-align: right;">
            <div class="hero-text">
              <button onclick=location.href="insertNewPurchaseForm.php">New</button>
              <button onclick=location.href="sessioakWorkers.php">Update</button>
              <button onclick=location.href="loginClientes.php">Delete</button>
              
            </div>
          </div>
        </div>
      </div>
-->