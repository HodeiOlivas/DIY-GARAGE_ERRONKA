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
            <?php
            echo "Welcome, " . $_SESSION['usuario'];
            ?>
        </p>
        <p class="image-text-secondary h1">To (Y)our DIY garage!</p>
        <!-- logo in middle -->
        <div class="circle cream-bg">
            <h4 class="mt-3">
                <i class="bi bi-tools primary-colour"></i>
            </h4>
        </div>
        <!-- !logo in middle -->



        <!-- profile -->
        <div class="image-profile">
            <div class="d-inline-flex justify-content-end profile-hover p-2 ">
                <div class="exp">
                    <h2><i class="bi bi-person-fill grey"></i></h2>
                </div>
                <div class="d-flex flex-column justify-content-center pl-1">
                    <p class="text-white uppercase text-start m-0 uppercase fw-bold d-inline-flex ml-1">
                        <?php
                        // echo  $_SESSION['usuario'];
                        ?>
                        <a href="#profile info" style="color:white;"><?php echo  $_SESSION['usuario']; ?></a>
                    </p>
                    <small class="fs-11">
                        <a href="../loginazalpenak/sessionsCustomersFinal.php" class="text-danger ml-1">LOG OUT</a>
                    </small>
                </div>
            </div>
        </div>
        <!-- !profile -->


        <!-- navbar -->
        <div class="row image-nav">
            <div class="col">
                <!-- start nav -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse ml-5" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#products info">Products</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#cabins info">Cabins</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#reservations info">Reservations</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#purchases info">Purchases</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#profile info">Contact</a>
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
                <h1><a href="contact.php">
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

                <div class="d-flex mt-5">
                    <button class="btn secondary-button-outline text-white px-5 py-2 mr-5" onclick="location.href='#products info'">
                        <h6 class="font-weight-bold m-0">See our products</h6>
                    </button>
                    <button class="btn secondary-button-outline text-white px-5 py-2 mr-5" onclick="location.href='#cabins info'">
                        <h6 class="font-weight-bold m-0">Our cabins</h6>
                    </button>
                    <button class="btn secondary-button text-white px-5 py-2 shadow" onclick="location.href='shoppingCart.php'">
                        <h6 class="font-weight-bold m-0">Your Cart</h6>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 pt-5 p-5">
        <hr / style="width:100%">
        <h4 class="font-weight-bold text-left mb-4">Your Reservations</h4>
        <table class="table table-blue rounded-lg" style="width:100%;text-align:center;margin-left:auto; margin-right:50%;">
            <colgroup>
                <col span="2" style="background-color:red">
            </colgroup>
            <thead style="vertical-align:left" class="">
                <tr style="text-align:center">
                    <th style='vertical-align:middle'>Reservation ID</th>
                    <th style='vertical-align:middle'>Username</th>
                    <th style='vertical-align:middle'>Cabin</th>
                    <th style='vertical-align:middle'>Date</th>
                    <th style='vertical-align:middle'>Starting Hour</th>
                    <th style='vertical-align:middle'>Ending Hour</th>
                    <th style='vertical-align:middle'>Amount Hours</th>
                    <th style='vertical-align:middle'>Total Price</th>
                </tr>

                <?php
                while ($erregistroa = mysqli_fetch_array($emaitza)) {
                    printf("<tr>
                        <td style='vertical-align:middle'>%d</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%s</td>
                        <td style='vertical-align:middle'>%.2f</td>
                        <td style='vertical-align:middle'>%.2f</td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6], $erregistroa[7]);
                }
                mysqli_free_result($emaitza);
                //mysqli_close($link);
                ?>

            </thead>
        </table>
        <div class="table text-right" style="width:100%">
            <a href="#reservations interaction">
                <button style="width: 30%;" class="btn btn-warning  ml-5 text-white">All Reservations</button>
            </a>
        </div>
    </div>



    <div class="p-5">
        <details>
            <summary>Image name</summary>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex soluta rem necessitatibus ratione nisi exercitationem, atque non autem earum, impedit sed id, eius nihil laboriosam maxime? Alias obcaecati fugiat inventore!</p>
            </div>
        </details>
    </div>
    <br>


    <!-- inicio3.jpg -->
    <div class="parallax" style="background-image: url('img/inicio3.jpg'); width:100%; height: 50%; text-align:center">
        <div style="text-align: left;">
            <h1 style="font-size:50px; color:greenyellow">DIY GARAGE</h1>


            <p style="margin-left:25px; color:white">Welcome to (Y)our garage!</p><br>

        </div>
    </div>

    <div style="height:auto;background-color:white;font-size:16px">
        <br><br>
        <div class="row">
            <div class="col-sm-4">
                <h3 style="color:darkred; text-align:center;">Reservations</h3>
                <p style="color:grey; text-align:center;">Rent one of our cabins to work yourself on your vehicle. In case <br>
                    you need help, you'll have full availability of any of our workers.
                </p>
            </div>
            <div class="col-sm-4">
                <h3 style="color:darkred; text-align:center;">Purchases</h3>
                <p style="color:grey; text-align:center;">Buy any product from our catalog to make repairing <br>
                    your vehicle an easier task. There is no stock limit.
                </p>
            </div>
            <div class="col-sm-4">
                <h3 style="color:darkred; text-align:center;">Cabins</h3>
                <p style="color:grey; text-align:center;">Choose the cabin that best suits the needs of your vehicle. <br>
                    Each cabin includes worker assistance/help if necessary.
                </p>
            </div>
        </div>
        <!-- yeet -->
        <br><br>
        <!-- <div style="height:1000px;background-color:red;font-size:36px;"> -->
        <!-- <div style="height:800px;background-color:#3b4754;"> -->
        <div style="height:auto;background-color:#3b4754;">
            <ul style="background-color:brown;">
                <li><a class="active" href="#start Customers">Home1</a></li>
                <li><a href="#products info">Products</a></li>
                <li><a href="#cabins info">Cabins</a></li>
                <li><a href="#reservations info">Reservations</a></li>
                <li><a href="#purchases info">Purchases</a></li>
                <li><a href="#profile info">Profile</a></li>

                <li style="float:right"><a class="active" href="#view profile">Profile</a></li>
                <li style="float:right"><a href="shoppingCart.php">Your Cart</a></li>


            </ul>
            <br>

            <div>
                <!-- div ABOUT US -->
                <br>
                <h3>ABOUT US:</h3>

                <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
                <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
            </div>

            <div>
                Scroaa123123ll Up and Down this page to see the parallax scrolling effect.
                This div is just here to enable scrolling.
                Tip: Try to remove the background-attachment property to remove the scrolling effect.
            </div>


            <div>
                <!-- div CATALOG OF PRODUCTS -->
                <hr id="products info" /><br><br>
                <h3>Ca2atalog of Products</h3>

                <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
                <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
                wqdw
                wfw
            </div>

        </div> <!-- div which has the sticky navbar on top -->
    </div>

    <div style="height:auto;background-color:#3b4754;">
        <div class="d-flex flex-wrap" style="table-layout:auto; align-items:center; text-align:justify; margin:100px">
            <?php
            $emaitza4 = mysqli_query($link, "select * from product");
            while ($erregistroa = mysqli_fetch_array($emaitza4)) {
            ?>
                <div class="w-25 mx-53" role="rowgroup">
                    <td2>
                        <div class="card" style="width: 400px; height:400px;">
                            <img class="card-img-top" src="<?php echo $erregistroa['Picture']; ?>" alt="Card image" style="width:100%; height:160px">
                            <div class="card-body;">
                                <h4><?php echo $erregistroa['Name']; ?></h4>
                                <p class="priceProduct" style="text-align:center"><?php echo $erregistroa['Price']; ?></p>
                                <?php
                                printf(
                                    "
                                            <a href='insertPurchaseAdvanced.php?prodIdentifier=%s'>
                                            <button class='buttonProd' onclick=location.href='webCustomersFinal.php';>Add ato aaCart</button>
                                            </a>",
                                    $erregistroa['id_Product']
                                );
                                ?>
                                <br><br><br>
                                <p style="text-align:justify; margin-left:10px; margin-right:10px;"><?php echo $erregistroa['Description']; ?></p>
                            </div>
                        </div>
                    </td2>
                    <br>
                </div>
            <?php
            }
            mysqli_free_result($emaitza4);
            //mysqli_close($link);
            ?>
        </div>
    </div>

    <hr id="cabins info" /><br><br> <!-- beginning of CABINS INFORMATION -->
    <div style="height:800px;background-color:white;font-size:16px">
        <div class="parallax" style="background-image: url('img_Cabins/cabinFondo2.jpg'); width:100%; height: 70%; text-align:center">
            <div style="text-align: left;">
                <h1 style="font-size:50px; color:greenyellow">DIY2 GARAGE</h1>
                <p style="margin-left:25px; color:white">Cabin's Section!</p><br>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-sm-4"> -->
            <div class="col">
                <div class="d-flex flex-wrap" style="table-layout:auto; align-items:center; text-align:right; margin:50px">
                    <?php
                    $emaitza4 = mysqli_query($link, "select * from cabin");
                    while ($erregistroa = mysqli_fetch_array($emaitza4)) {
                    ?>
                        <div class="w-25 mx-53" role="rowgroup">
                            <td2>
                                <h3 style="color:darkred; text-align:left;"><?php echo $erregistroa['Cabin_ID']; ?></h3>
                                <p style="color:grey; text-align:left;"><?php echo $erregistroa['Description']; ?></p>
                            </td2>
                        </div>
                    <?php
                    }
                    mysqli_free_result($emaitza4);
                    //mysqli_close($link);
                    ?>

                </div>
            </div>
        </div>
    </div>
    <br>

    <hr id="cabins info" /><br><br>
    <!-- <h3>Cabins' Information</h3> -->
    <h4 class="font-weight-bold text-left mb-4" style="color:white;">Cabin's information:</h4>
    <p class="font-weight text-left mb-4" style="color:white;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>

    <br>


    <!-- <div class="col-sm-4"> -->

    </div>
    <div>
        <h2>Our Services</h2>
        <p>The <strong>HALAB Garage</strong> allows you to repair every problem you have on your vehicle. Lets have a quick look. </p>
        <div class="row">
            <!-- <div class="col-sm-4"> -->
            <div class="col">
                <div class="d-flex flex-wrap" style="table-layout:auto; align-items:center; text-align:justify;">
                    <?php
                    $emaitza4 = mysqli_query($link, "select * from cabin");
                    while ($erregistroa = mysqli_fetch_array($emaitza4)) {
                    ?>
                        <div id="accordion">
                            <div class="card" style=" width:260px;margin:auto; margin-left:150px;">
                                <div class="card-header" style="height:50px;">
                                    <a class="card-link" data-toggle="collapse" href="#<?php echo $erregistroa['Cabin_ID']; ?>">
                                        <p style="text-align:center;"><?php echo $erregistroa['Cabin_ID']; ?></p>
                                    </a>
                                </div>
                                <div id="<?php echo $erregistroa['Cabin_ID']; ?>" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Size: <?php echo $erregistroa['Size']; ?> m.<br>
                                        Color: <?php echo $erregistroa['Color']; ?><br>
                                        Price: <?php echo $erregistroa['Price_Hour']; ?> €/h<br>
                                        Description: <?php echo $erregistroa['Description']; ?><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    mysqli_free_result($emaitza4);
                    //mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>

    </div>
    <br><br><br><br>
    <div class="" style="text-align:center">
        <!-- div to Return TOP -->
        <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
        <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <br><br>
    </div>


    <hr id="reservations info" /><br><br> <!-- beginning of CABINS INFORMATION -->
    <div style="height:800px;background-color:#3b4754;font-size:16px">
        <div class="parallax" style="background-image: url('img/rentFondo2.jpg'); width:100%; height: 60%; text-align:center">
            <div style="text-align: left;">
                <h1 style="font-size:50px; color:greenyellow; font:bold"><strong>DIY2 GARAGE</strong></h1>
                <p style="margin-left:25px; color:white">Reservation's Section!</p><br>
            </div>
        </div>

        <br>
        <div id="rcorners2">
            <h4 style="text-align:left; margin-left:50px; margin-top:10px;">Procedure for booking a cabin:</h4>
            <p style="text-align:left; margin-left:50px;">In order to make a reservation, you only need to have an <b>user account</b>. Once your account is
                created, you'll be able to make cabin reservations through a simple form. In this, you will be asked for basic data such as these:</p>
            <div style="margin-top:0px;margin-left:110px; font-size:14px;">
                <ul2>
                    <li>Username</li><br>
                    <li>Cabin</li><br>
                    <li>Date</li><br>
                    <li>Start time</li><br>
                    <li>End time</li><br>
                </ul2>
            </div>
            <p style="text-align:left; margin-left:50px;"><br>Note: despite being a Do It Yourself garage, when you make a reservation, you have the
                availability of any of our workers if necessary.</p>
        </div>

        <div>
            <?php
            //include("test_connect_db.php");
            $currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

            ?>
            <!--style="float:left -->

            <br>
            <h2>Your Reservations</h2>
            <h4 class="font-weight-bold text-left mb-4" style="color:white;">Your reservations:</h4>
            <p>The .table-dark class adds a black background to the table:</p>

            <!-- <table class="table table-blue rounded-lg tableMove" style="width:80%;text-align:center;margin-left:auto; margin-right:50%;"> -->
            <table class="table table-blue rounded-lg tableMove" style="text-align:center;margin-left:auto; margin-right:50%;">
                <colgroup>
                    <col span="1" style="background-color:greenyellow">
                </colgroup>
                <thead style="vertical-align:left" class="">
                    <tr style="text-align:center">
                        <th style="color:black;">Reservation ID</th>
                        <th>Username</th>
                        <th>Cabin</th>
                        <th>Date</th>
                        <th>Starting Hour</th>
                        <th>Ending Hour</th>
                        <th>Amount Hours</th>
                        <th>Total Price</th>
                        <th>Manage</th>
                    </tr>
                    <?php
                    while ($erregistroa = mysqli_fetch_array($emaitza)) {
                        printf("<tr >
                        <td style='color:black;'>%d</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%d</td>
                        <td>%.2f</td>
                        <td>
                          <a href='deleteAdvancedReservation.php?reservationIdentifier=%s'>
                            <img src='../loginAzalpenak/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                        </td>
                      </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6], $erregistroa[7], $erregistroa[0]);
                    }
                    mysqli_free_result($emaitza);
                    mysqli_close($link);
                    ?>
                </thead>
            </table>

            <div class="jumbotron text-left" style="width: 50%; margin-bottom:0; color:black">
                <h1>Anything else?</h1>
                <p>Try to add new <strong>reservations</strong>! </p>

                <div class="hero-image" style="text-align: right;">
                    <div class="hero-text">
                        <button onclick=location.href="newReservationFinalForm.php" style="width:15%;">New</button>
                    </div>
                </div>
            </div>


            <br>
        </div>
        <br><br>
        <div class="" style="text-align:center">
            <!-- div to Return TOP -->
            <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
            <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <br><br>
        </div>



        <hr id="purchases info" /><br><br>
        <div class="parallax" style="background-image: url('img/purchaseFondo1.jpeg'); width:100%; height: 60%; text-align:center">
            <div style="text-align: left;">
                <h1 style="font-size:50px; color:greenyellow; font:bold"><strong>DIY2 GARAGE</strong></h1>
                <p style="margin-left:25px; color:white">Purchase's Section!</p><br>
            </div>
        </div>

        <br>
        <div id="rcorners2">
            <h4 style="text-align:left; margin-left:50px; margin-top:10px;">Procedure for making a purchase:</h4>
            <p style="text-align:left; margin-left:50px;">In order to make a purchase, there is an only rule. This rule consists on not
                buying more than one product on each purchase.
        </div>
        <br>



        <!--dirigir al apartado de las cabinas -->
        <br>
        <h3 style="text-align: center;">PURCHASE HISTORY</h3>
        <p>Lets see in real time all <strong>Purchases</strong> you have done in our garage.</p>
        <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
        <br><br>

        <div>
            <?php
            //include("test_connect_db.php");
            $currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from purchase where cust_Username='$currentUser'");

            ?>

            <div style="width: 100%;">
                <h2>Your Purchases</h2>
                <p>The .table-dark class adds a black background to the table:</p>
                <table class="table table-blue rounded-lg tableMove" style="text-align:center;margin-left:auto; margin-right:50%;">
                    <colgroup>
                        <col span="1" style="background-color:greenyellow">
                    </colgroup>
                    <thead style="vertical-align:left" class="">
                        <tr style="text-align:center">
                            <th style="color:black;">Purchase ID</th>
                            <th>Username</th>
                            <th>Product Code</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Final Cost</th>
                            <th>Manage</th> <!-- Column to manage each record (in this case, the purchases) -->
                            <!-- <img src='deleteImage.png' id='argazkia' height=200px></img> -->
                            <!-- <img src='../loginAzalpenak/img/deleteImage.png' id='argazkia'></img> -->
                        </tr>

                        <?php
                        while ($erregistroa = mysqli_fetch_array($emaitza)) {
                            printf("<tr >
                      <td style='color:black;'>%d</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%d</td>
                      <td>%.2f</td>
                      <td>
                          <a href='deleteAdvanced.php?purchaseIdentifier=%s'>
                            <img src='../loginAzalpenak/img/deleteImage.png' width='75px' height='23px' align='center'></img>
                          </a>
                          
                      </td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[0]);
                        }
                        mysqli_free_result($emaitza);
                        //mysqli_close($link);

                        ?>

                    </thead>
                </table>

                <div class="jumbotron text-left" style="width: 50%; margin-bottom:0; color:black">
                    <h1>Anything ealse?</h1>
                    <p>Try to add new <strong>purchases</strong>! </p>

                    <div class="hero-image" style="text-align: right;">
                        <div class="hero-text">
                            <button onclick=location.href="newPurchaseFinalForm.php" style="width:15%;">New</button>
                        </div>
                    </div>
                </div>

                <br>
            </div>

            <br><br>
            <div class="" style="text-align:center">
                <!-- div to Return TOP -->
                <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
                <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                <br><br>
            </div>
        </div>
        <br>


        <hr / id="profile info">




        <div>
            <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
            <!--dirigir al apartado de las cabinas -->
            <h3 style="text-align: left;">Profile Info</h3>
            <p style="text-align: left;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
            <p style="text-align: left;"><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
            <br><br>
            <?php
            $currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            $emaitza = mysqli_query($link, "select * from customer where Username='$currentUser'");
            ?>
            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {
            ?>
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../loginAzalpenak/img/encabezadoTaller1.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo  $_SESSION['usuario']; ?></h4>
                        <p class="card-text">Name: <?php echo  $erregistroa['Name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;Surname: <?php echo  $erregistroa['Surname']; ?></p>
                        <p class="card-text">Birthday: <?php echo  $erregistroa['Birthday']; ?></p>
                        <p class="card-text">Phone Number: <?php echo  $erregistroa['Phone_Number']; ?></p>
                        <p class="card-text">Mail: <?php echo  $erregistroa['Mail']; ?></p>
                        <a href="webCustomersFinal.php" class="btn btn-primary">Home</a>
                    </div>
                </div>

            <?php
            }
            mysqli_free_result($emaitza);
            //mysqli_close($link);
            ?>
            <br><br><br><br>
            <div class="" style="text-align:center">
                <!-- div to Return TOP -->
                <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
                <button class="rounded-lg" style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                <br><br>
            </div>
            <br><br><br><br>

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