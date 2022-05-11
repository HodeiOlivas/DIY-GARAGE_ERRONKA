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
  <title>Customer's Website</title>

  <style>
    body {
      font-size: 16px;
      height: 100%;
      padding: 10px 25px;
      background-color: white;
      /* 8B0000 */
      /* 991F36 */
      /* margin-left: 12px; */
    }

    html {
      height: 100%;
    }

    .parallax {
      /* The image used */
      /* background-image: url("img/encabezadoTaller3.jpg"); */
      background-image: url("img/fondoF1_1.jpg");

      /* Full height */
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

    h1 {
      padding: 10px 25px;
    }

    h2 {
      text-align: center;
    }

    .cardProduct {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      /* margin: auto; */
      padding-left: 10px 25px;
      text-align: center;
      font-family: arial;
    }

    .priceProduct {
      color: grey;
      font-size: 22px;
    }

    .cardProduct button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .cardProduct button:hover {
      opacity: 0.7;
    }

    .table2 {
      margin-left: 0px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    .th2 {
      text-align: left;
      padding: 8px;
    }

    .td2 {
      text-align: left;
      padding: 0px;
    }

    .progress-container {
      width: 100%;
      height: 8px;
      background: #ccc;
    }

    .progress-bar {
      height: 8px;
      background: brown;
      /* background: #04AA6D; */
      width: 0%;
    }

    .header2 {
      position: fixed;
      top: 0;
      z-index: 1;
      width: 100%;
      background-color: #f1f1f1;
    }

    #overlay {
      position: fixed;
      display: none;
      width: 40%;
      height: 40%;
      /* width: 100%;
      height: 100%; */
      top: 0;
      left: 25%;
      /* left: 0; */
      right: 0;
      bottom: 50;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 2;
      cursor: pointer;
    }

    #text {
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 50px;
      color: white;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    }

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>

<!-- <body class="specificBody"> -->



<body>

  <div class="header2">
    <h2>HALAB GARAGE! </h2>
    <?php
    session_start();
    echo "Welcome, " . $_SESSION['usuario'];
    ?>
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
  </div>

  <script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {
      myFunction()
    };

    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }
  </script>

  <?php
  //session_start();
  printf($_SESSION['usuario']);
  echo "Welcome, " . $_SESSION['usuario'];
  ?>
  <h1 id="start Customers"> Welcome to Customer's website. </h1>

  <!-- <h1 style="margin-left: 80px;"> Welcome to Customer's website. </h1> -->

  <div class="header">
    <h2>CUSTOMER</h2>
    <p>Scroll down to see the sticky effect.</p>

  </div>

  <!-- inicio3.jpg -->
  <div class="parallax" style="background-image: url('img/inicio3.jpg'); width:100%; height: 50%; text-align:center">
    <div style="text-align: left;">
      <h1 style="font-size:50px; color:greenyellow">DIY GARAGE</h1>


      <p style="margin-left:25px; color:white">Welcome to (Y)our garage!</p><br>

    </div>
  </div>

  <div style="height:auto;background-color:white;font-size:16px">
    Scroll Up and Down this page to see the parallax scrolling effect.
    This div is just here to enable scrolling.
    Tip: Try to remove the background-attachment property to remove the scrolling effect.
    <div class="row">
      <div class="col-sm-4">
        <br><br><br><br>
        <h3 style="color:darkred">Reservations</h3>
        <p style="color:grey">Rent one of our cabins to work yourself on your vehicle. In case <br>
          you need help, you'll have full availability of any of our workers.
        </p>
      </div>
      <div class="col-sm-4">
        <br><br><br><br>
        <h3 style="color:darkred">Purchases</h3>
        <p style="color:grey">Buy any product from our catalog to make repairing <br>
          your vehicle an easier task. There is no stock limit.
        </p>
      </div>
      <div class="col-sm-4">
        <br><br><br><br>
        <h3 style="color:darkred">Cabins</h3>
        <p style="color:grey">Choose the cabin that best suits the needs of your vehicle. <br>
          All cabins include worker assistance.
        </p>
      </div>
    </div>



    <br><br>
    <ul style="background-color:brown;">
      <li><a class="active" href="#start Customers">Home</a></li>
      <li><a href="#products info">Products</a></li>
      <li><a href="#cabins info">Cabins</a></li>
      <li><a href="#reservations interaction">Reservations</a></li>
      <li><a href="#purchases interaction">Purchases</a></li>
      <li><a href="#profile">Profile</a></li>
      <li><a href="#contact">Contact</a></li>

      <li style="float:right"><a class="active" href="#view profile">Profile</a></li>
      <li style="float:right"><a href="sessioak.php">Log out</a></li>

      <li><a href="#acabar">Abouaat us</a></li>
    </ul>

    <br><br><br><br>


    <br><br>
    <hr id="products info" /><br><br>
    <!--dirigir al apartado de las cabinas -->
    <!-- productos izquierda pruebas -->
    <div>
      <h3>Caaaatalog of Products</h3>

      <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
      <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
      <a href="#" class="btn btn-info" role="button">wfw</a>
    </div>

    <!-- productos izquierda pruebas -->
    <div>
      <?php
      include("test_connect_db.php");
      $link = connectDataBase();
      $emaitza = mysqli_query($link, "select * from product");
      ?>

      <div class="container">
        <h2>ALL THE PRODUCTS</h2>
        <p>The .table-dark class adds a black background to the table:</p>
        <table class="table table-dark">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Description</th>
              <th>Picture</th>

            </tr>

            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {
              printf("<tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td>%s</td>
                        <td><img src=%s width='50' height='50'><br></td>
                    </tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4]);
            }
            mysqli_free_result($emaitza);
            //mysqli_close($link);
            ?>

          </thead>
        </table>

        <hr />
      </div>
      <!-- <TABLE class="table2" style="border: 1; " cellpadding="30" cellspacing="pixels"> -->
      <TABLE class="table2" cellpadding="30" cellspacing="pixels">
        <!-- <Tr style="text-align: center;">
          <th>Product</th>
          <th>Name</th>
          <th>Picturgefee</th>
        </Tr> -->
        <?php

        $emaitza4 = mysqli_query($link, "select * from product");
        while ($erregistroa = mysqli_fetch_array($emaitza4)) {
        ?>
          <div>
            <td>
              <div class="cardProduct" style="display:flex">
                <img class="card-img-top" src="<?php echo $erregistroa['Picture']; ?>" alt="Card image" style="width:100%; height:150px">
                <h1><?php echo $erregistroa['Name']; ?></h1>
                <p class="priceProduct"><?php echo $erregistroa['Price']; ?></p>
                <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                <p><button>Add to Cart</button></p>
              </div>
            </td>
          </div>
        <?php
        }
        mysqli_free_result($emaitza4);
        //mysqli_close($link);
        ?>
      </TABLE>
    </div>

    <TABLE class="" cellpadding="30" cellspacing="pixels" style="
      display: flex;
      flex-flow: row wrap;">
      <!-- <Tr style="text-align: center;">
          <th>Product</th>
          <th>Name</th>
          <th>Picturgefee</th>
        </Tr> -->
      <?php

      $emaitza4 = mysqli_query($link, "select * from product");
      while ($erregistroa = mysqli_fetch_array($emaitza4)) {
      ?>
        <br>
        <div>
          <td2 class="flex-table row" role="rowgroup">
            <div class="cardProduct">
              <img class="card-img-top" src="<?php echo $erregistroa['Picture']; ?>" alt="Card image" style="width:100%; height:150px">
              <h1><?php echo $erregistroa['Name']; ?></h1>
              <p class="priceProduct"><?php echo $erregistroa['Price']; ?></p>
              <p><?php echo $erregistroa['Description']; ?></p>
              <!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p> -->
              <?php
              // <img src='../loginAzalpenak/img/deleteImage.png' width='75px' height='23px' align='center'></img>
              printf(
                "
                    <a href='insertPurchaseAdvanced.php?prodIdentifier=%s'>
                    <button onclick=location.href='insertPurchaseAdvanced.php'>Add ato aaCart</button>
                    </a>",
                $erregistroa['id_Product']
              );
              ?>
            </div>
            </td>
        </div>
      <?php
      }
      mysqli_free_result($emaitza4);
      mysqli_close($link);
      ?>
    </TABLE>

    <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
      <h1>Anything else?</h1>
      <p style="margin-left: 25px">Try to add, upadte or delete <strong>reservations</strong>! </p>

      <div class="hero-image" style="text-align: right;">
        <div class="hero-text">
          <button onclick=location.href="insertNewReservationForm.php">New</button>
          <button onclick=location.href="index.php">Update</button>
          <button onclick=location.href="deleteReservationForm.php">Delete</button>
          <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
        </div>
      </div>
    </div>
  </div>

  <hr />
  <br><br>



  <!-- <div style="height:1000px;background-color:red;font-size:36px">
    <ul style="font-size: 16px;">
      <li><a class="active" href="#start Customers">Home</a></li>
      <li><a href="#products info">Products</a></li>
      <li><a href="#cabins info">Cabins</a></li>
      <li><a href="#reservations interaction">Reservations</a></li>
      <li><a href="#purchases interaction">Purchases</a></li>
      <li><a href="#profile">Profile</a></li>
      <li><a href="#contact">Contact</a></li>

      <li style="float:right"><a class="active" href="#view profile">Profile</a></li>
      <li style="float:right"><a href="#log out">Log out</a></li>

      <li><a href="#acabar">About WWus</a></li>
    </ul>
    ScAroll Up and Down this page to see the parallax scrolling effect.
    This div is just here to enable scrolling.
    Tip: Try to remove the background-attachment property to remove the scrolling effect.
  </div> -->






  </div>
  </div>

  </table>
  </div>

  </div>

  <!-- <div class="parallax" style="background-image: url('img_Cabins/carPainting1.jpg'); width:100%; height: 75%; text-align:center"> -->
  <div class="parallax" style="background-image: url('img_Cabins/cabinFondo2.jpg'); width:100%; height: 75%; text-align:center">
    <div style="text-align: left;">
      <h1 style="font-size:50px; color:greenyellow">DIY GARAGE</h1>
      <h3 style="margin-left:25px; color:white">Check the cabins to know which one suits you! </h3><br>
      <!-- <p style="margin-left:25px; color:white">Welcome to (Y)our garage!</p><br> -->

    </div>

  </div>






  </div>



  <!-- </div> -->
  <br><br>

  <hr id="cabins info" /><br><br>
  <!--dirigir al apartado de las cabinas -->
  <h3 style="text-align: right;">Cabins' Information</h3>
  <p style="text-align: right;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p style="text-align: right;"><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
  <br><br>


  <?php
  //include("test_connect_db.php");
  $currentUser = $_SESSION['usuario'];
  $link = connectDataBase();
  $emaitza = mysqli_query($link, "select * from cabin");

  ?>
  <table class="table table-dark" style="text-align:center; width:auto;">
    <thead style="vertical-align:left">
      <tr style="text-align:center">
        <th>Cabin ID</th>
        <th>Size</th>
        <th>Color</th>
        <th>Price Hour</th>
        <th>Description</th>
        <th>Display Info</th>
      </tr>

      <?php
      while ($erregistroa = mysqli_fetch_array($emaitza)) {
        printf("<tr>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td>%s</td>
                        <td>%.2f</td>
                        <td style='text-align:left;width:auto'>%s</td>
                        <td>
                          <button onclick='on()' style='color:brown'>Turn on overlay effect</button>
                        </td>
                      </tr>", $erregistroa[0], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[5]);
      }
      mysqli_free_result($emaitza);
      mysqli_close($link);
      ?>

    </thead>
  </table>


  <div id="overlay" onclick="off()">
    <div id="text">Oaaverlay Text</div>
  </div>

  <div style="padding:20px">
    <h2>Overlay with Text</h2>
    <table>
      <tr>
        <td>
          <button onclick="on()">Turn on overlay effect</button>
        </td>
        <td>
          <button onclick="on()">Turn on overlay effect</button>
        </td>
        <td>
          <button onclick="on()">Turn on overlay effect</button>
        </td>
        <td>
          <button onclick="on()">Turn on overlay effect</button>
        </td>
      </tr>
    </table>
  </div>

  <script>
    function on() {
      document.getElementById("overlay").style.display = "block";
    }

    function off() {
      document.getElementById("overlay").style.display = "none";
    }
  </script>

  <br>
  <hr />
  <br>




  <div class="container">
    <h2>Our Services</h2>
    <p>The <strong>HALAB Garage</strong> allows you to repair every problem you have on your vehicle. Lets have a quick look. </p>
    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            Cabins
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
    </div>
  </div>

  <br>
  <hr /><br><br>



  <br>
  <hr />
  <br>


  <hr id="reservations interaction" /><br><br>
  <!--dirigir al apartado de las cabinas -->
  <h3 style="text-align: center;">RESERVATION HISTORY</h3>
  <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
  <br><br>

  <div class="parallax" style="background-image: url('img/fondoF1_2.jpg'); width:100%; height: 25%; text-align:center"></div>

  <div style="height:1000px;background-color:red;font-size:36px">
    Scroll Up and Down this page to see the parallax scrolling effect.
    This div is just here to enable scrolling.
    Tip: Try to remove the background-attachment property to remove the scrolling effect.
  </div>

  <div class="parallax"></div>

  <div>
    <?php
    //include("test_connect_db.php");
    $currentUser = $_SESSION['usuario'];
    $link = connectDataBase();
    $emaitza = mysqli_query($link, "select * from reservation where cust_Username='$currentUser'");

    ?>

    <div class="container">
      <!--style="float:left -->
      <br>
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

      <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
        <h1>Anything else?</h1>
        <p style="margin-left: 25px">Try to add, upadte or delete <strong>reservations</strong>! </p>

        <div class="hero-image" style="text-align: right;">
          <div class="hero-text">
            <a href='insertNewReservationForm.php'>
              <img src='../loginAzalpenak/img/add1.png' width='40px' height='30px' align='center'></img>
            </a>
            <a href='insertNewReservationForm.php'>
              <img src='../loginAzalpenak/img/addList.png' width='40px' height='30px' align='center'></img>
            </a>
            <button onclick=location.href="insertNewReservationForm.php">New</button>
            <button onclick=location.href="insertNewReservationForm.php">Update</button>
            <!-- <button onclick=location.href="deleteReservationForm.php">Delete</button> -->
          </div>
        </div>
      </div>

      <br>
    </div>


  </div>

  <!-- $usuario=$_POST["usuario"]; -->




  <hr id="purchases interaction" /><br><br>
  <!--dirigir al apartado de las cabinas -->
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

    <div class="container">
      <h2>Your Purchases</h2>
      <p>The .table-dark class adds a black background to the table:</p>
      <table class=" table table-dark" style="text-align:center">
        <thead style="vertical-align:left">
          <tr style="text-align:center">
            <th>Purchase ID</th>
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
                      <td>%d</td>
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
          // printf("<button onclick=location.href='insertNewPurchaseForm.php'>New</button>");
          mysqli_free_result($emaitza);
          mysqli_close($link);

          ?>

        </thead>
      </table>

      <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
        <h1>Anything else?</h1>
        <p style="margin-left: 25px">Try to add, upadte or delete pruchases! </p>

        <div class="hero-image" style="text-align: right;">
          <div class="hero-text">
            <a href='insertNewPurchaseForm.php'>
              <img src='../loginAzalpenak/img/add1.png' width='40px' height='30px' align='center'></img>
            </a>
            <a href='insertNewPurchaseForm.php'>
              <img src='../loginAzalpenak/img/addList.png' width='40px' height='30px' align='center'></img>
            </a>
            <button onclick=location.href="insertNewPurchaseForm.php">New</button>
            <button onclick=location.href="insertNewPurchaseForm.php">Update</button>
            <!-- <button onclick=location.href="deletePurchaseForm.php">Delete</button> -->
          </div>
        </div>
      </div>

      <br>
      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Continue managing</button>
      <div id="demo" class="collapse">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

        <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
          <h1>Anything else?</h1>
          <p style="margin-left: 25px">Try to add, upadte or delete pruchases! </p>

          <div class="hero-image" style="text-align: right;">
            <div class="hero-text">
              <button onclick=location.href="insertNewPurchaseForm.php">New</button>
              <button onclick=location.href="sessioakWorkers.php">Update</button>
              <button onclick=location.href="loginClientes.php">Delete</button>
              <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>



  <br>
  <hr />
  <br><br><br><br>

  <div>
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



  <div>
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

    <hr id="profile" /><br><br>
    <p id="acabar">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <!--dirigir al apartado de las cabinas -->
    <h3 style="text-align: left;">Profile Info</h3>
    <p style="text-align: left;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p style="text-align: left;"><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    <br><br>
  </div>


</body>

</html>


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



<!-- 
links info:
  popover image -> https://mdbootstrap.com/snippets/jquery/ascensus/333171#js-tab-view 
-->