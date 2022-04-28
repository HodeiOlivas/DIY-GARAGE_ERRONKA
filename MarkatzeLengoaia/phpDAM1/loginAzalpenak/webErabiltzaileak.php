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
  </style>
</head>

<!-- <body class="specificBody"> -->



<body>



  <?php
  session_start();
  // printf($_SESSION['usuario']);
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
        <h3 style="color:darkred">Product 1</h3>
        <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-sm-4">
        <br><br><br><br>
        <h3 style="color:darkred">Product 2</h3>
        <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-sm-4">
        <br><br><br><br>
        <h3 style="color:darkred">Product 3</h3>
        <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
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
      <li style="float:right"><a href="#log out">Log out</a></li>

      <li><a href="#acabar">About us</a></li>
    </ul>

    <br><br><br><br>

  </div>

  <hr />
  <br><br>



  <div style="height:1000px;background-color:red;font-size:36px">
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

      <li><a href="#acabar">About us</a></li>
    </ul>
    Scroll Up and Down this page to see the parallax scrolling effect.
    This div is just here to enable scrolling.
    Tip: Try to remove the background-attachment property to remove the scrolling effect.
  </div>



  <br><br>
  <hr id="products info" /><br><br>
  <!--dirigir al apartado de las cabinas -->
  <h3>Catalog of Products</h3>

  <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
  <a href="#" class="btn btn-info" role="button">wfw</a>



  <!-- </div> -->
  <br><br>

  <hr id="cabins info" /><br><br>
  <!--dirigir al apartado de las cabinas -->
  <h3 style="text-align: right;">Cabins' Information</h3>
  <p style="text-align: right;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p style="text-align: right;"><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
  <br><br>


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
  <!--dirigir al apartado de las cabinas -->
  <h3 style="text-align: left;">RESERVATIONS</h3>
  <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p>
    <strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.<a href="#reservations interaction" class="btn btn-info" role="button" style="float:right">Manage reservations</a>
  </p>
  <a href="#reservations interaction" class="btn btn-info" role="button">Manage reservations</a>
  <br><br>


  <br>
  <hr />
  <br>



  <!--dirigir al apartado de las cabinas -->
  <h3 style="text-align: right;">Purchases</h3>
  <p style="text-align: right;">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p style="text-align: right;"><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.
    <a href="#purchases interaction" class="btn btn-info" role="button" style="float:left">Manage purchases</a>
  </p>
  <a href="#purchases interaction" class="btn btn-info" role="button" style="float:right">Manage purchases</a>
  <br><br>


  <br>
  <hr />
  <br>

  <h3 id="erabiltzaile guztiak">Sticky Navigation Bar Example</h3>

  <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>

  <div>
    <?php
    include("test_connect_db.php");
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


  </div>

  <br />

  <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
  <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
  <p>Image at the bottom (card-img-bottom):</p>



  <hr />
  <hr />

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
          mysqli_free_result($emaitza);
          mysqli_close($link);

          ?>

        </thead>
      </table>

      < <div class="jumbotron text-left" style="width: 100%; margin-bottom:0; color:black">
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
            <button onclick=location.href="index.php">Update</button>
            <button onclick=location.href="deletePurchaseForm.php">Delete</button>
            <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
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