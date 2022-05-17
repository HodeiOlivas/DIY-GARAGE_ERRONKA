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

        hr.new4 {
            border: 1px solid red;
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
            echo "Welcome, to the DIY Halab Garage! ";
            ?>
        </p>
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
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#products info">Products</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#cabins info">Cabins</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#reservations info">Reservations</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#purchases interaction">Purchases</a>
                                <a class="nav-link text-white text-uppercase fs-13 px-3" href="#contact info">Contact</a>
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
        $link = connectDataBase();
        //$currentUser = $_SESSION['usuario'];
        //$link = connectDataBase();
        //$emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

        ?>
        <!-- working part -->
        <!-- <div class="row px-3">
      <div class="col-6 ">
        <h1>test</h1>
      </div>
      <div class="col-6 text-right mt-5 pr-5">
        <h1><a href="contact.php">
            <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white ">
              Ask a question <i class="bi bi-telephone"></i>
            </button>
          </a></h1>
      </div>
    </div> -->
        <div class="d-flex w-100">
            <div class="col text-right mt-5">

                <h1>
                    <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" style="width:210px;" onclick=location.href="sessionsCustomersFinal.php" style="width:auto;">
                        <h6 class="font-weight-bold m-0">Log in as Customer</h6>
                    </button>
                

                    <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" style="width:210px;" onclick=location.href="sessionsWorkersFinal.php" style="width:auto;">
                        <h6 class="font-weight-bold m-0">Log in as Worker</h6>
                    </button>
                </h1>

            </div>
        </div>

        <div class="row mt-4" id="test">
            <div class="col-6 pl-4 ">
                <h1 class="text-left text-white font-weight-bold">Repair any problems you might have at <span class="text-success">The HALAB Garage</span>.</h1>
                <h4 class="colour-secondary font-weight-bold text-left">Lets have a quick look.</h4>

                <div class="d-flex mt-5">
                    <!-- <button class="btn secondary-button-outline text-white px-5 py-2 mr-5" onclick=location.href="sessionsCustomersFinal.php" style="width:auto;">
                        <h6 class="font-weight-bold m-0">Log in as Customer</h6>
                    </button>
                    <button class="btn secondary-button-outline text-white px-5 py-2 mr-5" onclick=location.href="sessionsWorkersFinal.php" style="width:auto;">
                        <h6 class="font-weight-bold m-0">Log in as Worker</h6>
                    </button> -->
                    <h1>
                        <a href="contact.php">
                            <button class="btn btn-danger px-4 py-2 rounded-lg CTA-button text-white shadow" style="width:210px;">
                                Ask a question <i class="bi bi-telephone"></i>
                            </button>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="p-5">
        <details>
            <summary>Image name</summary>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex soluta rem necessitatibus ratione nisi exercitationem,
                    atque non autem earum, impedit sed id, eius nihil laboriosam maxime? Alias obcaecati fugiat inventore!</p>
            </div>
        </details>
    </div> -->


    <br>
    <hr />
    <br>

    <!-- inicio3.jpg -->
    <div class="parallax" style="background-image: url('img/inicio3.jpg'); width:100%; height: 50%; text-align:center">
        <div style="text-align: left;">
            <h1 style="font-size:50px; color:greenyellow">DIY GARAGE</h1>


            <p style="margin-left:25px; color:white">Welcome to (Y)our garage!</p><br>

        </div>
    </div>

    <div style="height:auto;background-color:white;font-size:16px">
        <div class="row">
            <div class="col-sm-4">
                <br><br><br>
                <h3 style="color:darkred; text-align:center;">Reservations</h3>
                <p style="color:grey; text-align:center;">Rent one of our cabins to work yourself on your vehicle. In case <br>
                    you need help, you'll have full availability of any of our workers.
                </p>
                <!-- <hr class="new4"> -->
                <hr / class="new4" style="margin-left: 20px;">
            </div>
            <div class="col-sm-4">
                <br><br><br>
                <h3 style="color:darkred; text-align:center;">Purchases</h3>
                <p style="color:grey; text-align:center;">Buy any product from our catalog to make repairing <br>
                    your vehicle an easier task. There is no stock limit.
                </p>
                <!-- <hr class="new4"> -->
                <hr / class="new4" style="margin-left: 20px;">
            </div>
            <div class="col-sm-4">
                <br><br><br>
                <h3 style="color:darkred; text-align:center;">Cabins</h3>
                <p style="color:grey; text-align:center;">Choose the cabin that best suits the needs of your vehicle. <br>
                    All cabins include worker assistance.
                </p>
                <!-- <hr class="new4"> -->
                <hr / class="new4" style="margin-left: 20px;margin-right: 20px;">
            </div>
        </div>
        <!-- yeet -->
        <br><br>
        <!-- <div style="height:1000px;background-color:red;font-size:36px;"> -->
        <!-- <div style="height:800px;background-color:#3b4754;"> -->
        <div style="height:auto;background-color:#3b4754;">

            <br>

            <div>
                <!-- div ABOUT US -->
                <br>
                <h3>ABOUT US:</h3>

                <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
                <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
            </div>



            <div style=" margin:100px;">
                <!-- div CATALOG OF PRODUCTS -->
                <hr id="products info" class="new4" style="width:96%;"><br><br>
                <!-- <h3>Ca22atalog of Products</h3> -->
                <h4 class="font-weight-bold text-left mb-4 margin:100px;" style="color:white;">PRODUCT CATALOG:</h4>
                <div style="margin:0px;max-width: 96%; word-wrap:unset; word-break: break-all;">
                    <p style="color:white;">Check the whole product catalog to find the one that best suits your vehicle's needs. The catalog is renewed
                        every week with at least one new product of the best quality. Thats why we're so high up in the auto repair market. Right now, we
                        are working on the option of giving discounts to customers who, when buying a product to carry out a repair, deliver the old or
                        damaged component / piece. </p>
                    <p style="color:white;text-align:justify;text-justify: inter-word;">When you're logged in, you will be able to add a product to your
                        cart clicking the button of the cards. The catalog is renewed every week with at least one new product of the best quality. Thats
                        why we are that high up in the auto repair market.</p>
                    <br>
                    <hr>
                </div>
            </div>

        </div> <!-- div which has the sticky navbar on top -->
    </div>

    <div style="height:auto;background-color:#3b4754; ">
        <div class="d-flex flex-wrap" style="table-layout:auto; align-items:center; text-align:justify; margin:100px;">
            <?php
            $emaitza4 = mysqli_query($link, "select * from product");
            while ($erregistroa = mysqli_fetch_array($emaitza4)) {
            ?>
                <div class="w-25 mx-53" role="rowgroup">
                    <td2>
                        <div class="card" style="width: 90%; height:350px;">
                            <img class="card-img-top" src="<?php echo $erregistroa['Picture']; ?>" alt="Card image" style="width:100%; height:160px">
                            <div class="card-body;">
                                <h4><?php echo $erregistroa['Name']; ?></h4>
                                <p class="priceProduct" style="text-align:center"><?php echo $erregistroa['Price']; ?></p>
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

        <div class="" style="text-align:center">
            <!-- div to Return TOP -->
            <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
            <button style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <br><br>
        </div>

    </div>

    <hr id="cabins info" /><br><br> <!-- beginning of CABINS INFORMATION -->
    <div style="height:800px;background-color:white;font-size:16px">
        <div class="parallax" style="background-image: url('img_Cabins/cabinFondo2.jpg'); width:100%; height: 75%; text-align:center">
            <div style="text-align: left;">
                <h1 style="font-size:50px; color:greenyellow">DIY2 GARAGE</h1>
                <p style="margin-left:25px; color:white">Cabin's Section! </p><br>
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
                            <td2 style="text-align:center; text-align:center;">
                                <h3 style="color:darkred;"><?php echo $erregistroa['Cabin_ID']; ?></h3>
                                <p style="color:grey;"><?php echo $erregistroa['Description']; ?></p>
                                <!-- <p style="color:grey; text-align:justify;">Buy any product from our catalog to make repairing <br>
                                    your vehicle an easier task. There is no stock limit.
                                </p> -->
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
        </div>
        <!-- yeet -->
        <br><br>
    </div>
    <br>

    <hr id="cabins info" /><br><br>
    <!-- <h3>Cabins' Information</h3> -->
    <h4 class="font-weight-bold text-left mb-4" style="color:white;">Cabin's information:</h4>
    <p class="font-weight text-left mb-4" style="color:white;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <br><br>

    <br>

    </div>
    <div>
        <h2>Our Services</h2>
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


        <!-- <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        C1
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">

                        Ver información sobre las cabinas que tiene el garage.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        Catalog of products
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Ver información sobre los productos que hay en el catálogo de productos.
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <br><br><br><br>
    <div class="" style="text-align:center">
        <!-- div to Return TOP -->
        <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
        <button style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
            //$currentUser = $_SESSION['usuario'];
            $link = connectDataBase();
            //$emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

            ?>

            <br>
        </div>
        <br><br><br><br>
        <div class="" style="text-align:center">
            <!-- div to Return TOP -->
            <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
            <button style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <br><br>
        </div>



        <hr id="purchases interaction" /><br><br>
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
        <br><br>
        <div class="" style="text-align:center">
            <!-- div to Return TOP -->
            <button class="btn btn-warning px-4 py-2 rounded-lg CTA-button text-white shadow" onclick="topFunction()" id="myBtn" title="Go to top">Return Top</button>
            <button style="width: 20%;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <br><br>
        </div>





        <br>
        <hr />
        <br><br><br><br>

        <div>
            <hr / id="contact info">
            <h3 style="text-align: center;">Contact</h3>
            <p>Lets see in real time all <strong>Purchases</strong> you have done in our garage.</p>
            <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
            <br><br>

            <div class="container">
                <h2>Accordion Example</h2>
                <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <br><br><br><br><br><br><br><br>

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