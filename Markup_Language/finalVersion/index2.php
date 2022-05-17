<!DOCTYPE html>
<html lang="en">

<head>
  <title>Garage HALAB 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 1100px;
      /*1100px*/
      text-align: center;
    }

    body {
      height: 100%;
      margin: 0;
      padding: 10px 25px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      background-color: whitesmoke;
    }

    .hola {
      /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../finalVersion/img/encabezadoTaller3.jpg"); */
      /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../finalVersion/img/fondoIndex1.jpg"); */
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../finalVersion/img/fondoIndex2.jpg");
      height: 100%;
      /* 50% */
      background-position: center;
      background-repeat: no-repeat;
      /* background-size: cover; */
      position: relative;
      background-color: white;
    }

    .hola2 {
      /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../finalVersion/img/encabezadoTaller3.jpg"); */
      /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../finalVersion/img/inicio3.jpg"); */
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../finalVersion/img/inicio3.jpg");
      width: 100%;
      height: 100%;
      /* 50% */
      background-position: center;
      background-repeat: no-repeat;
      /* background-size: cover; */
      position: relative;
      background-color: white;
    }

    h3 {
      color: whitesmoke;
      text-align: center;
    }

    p {
      color: black;
      text-align: left;
    }

    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
      height: 300px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 70%;
      border-left: none;
      height: 300px;
      display: none;
    }

    /* Clear floats after the tab */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>
</head>

<body>



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

  <!-- <div class="hola" style="margin-bottom:0; color:black">
    <h1>Mya First Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div> -->
  <div class="jumbotron text-center" style="margin-bottom:0; color:black">
    <h1>My First Bootstrap 4 Page</h1>
    <p>Resize this responsive page to see the effect!</p>
    <div class="hero-image" style="text-align: right;">
      <div class="hero-text">
        <button onclick=location.href="sessioak.php">Log in as Customer</button>
        <button onclick=location.href="sessioakWorkers.php">Log in as Worker</button>
        <button onclick=location.href="loginClientes.php">Log in as Admin</button>
        <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
      </div>
    </div>
  </div>
  <!-- Prueba imagen de fondo -->
  <div class="hola2">

    <div class="hero-text">
      <!-- <h1 style="font-size:50px">DIY GARAGE</h1>
      <p>Welcome to (Y)our garage!</p>
      <button onclick=location.href="loginCustomers.php">Login now</button><br><br>
      <button onclick=location.href="sessioak.php">Log in as Customer</button>
      <button onclick=location.href="sessioakWorkers.php">Log in as Worker</button>
      <button onclick=location.href="loginClientes.php">Log in as Admin</button> -->
      <div id="demo" class="carousel slide" data-ride="carousel" style="width:100%">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner" style="width: 100%; text-align:center">
          <div class="carousel-item active" style="height:100%; width:100%">
            <img src="../finalVersion/img/inicio3.jpg" alt="New York" width="100%"> <!-- width="100%" height="60%" -->
          </div>
          <div class="carousel-item" style="height:100%;width:100%">
            <!-- <img src="../finalVersion/img/encabezadoTaller1.jpg" alt="Los Angeles" width="100%" height="60%"> -->
            <img src="../finalVersion/img/fondoInicio2.webp" alt="Los Angeles" width="80%" height="80%">
          </div>
          <div class="carousel-item" style="height:100%; width:100%">
            <img src="../finalVersion/img/fondoLogin1.jfif" class="float-right" alt="Chicago" width="100%" height="80%">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <!-- <br><br>
      <br><br> -->

      <!-- ########################################################## PART ONE OF THE PAGE ########################################################## -->
      <div class="jumbotron text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
      </div>
      <div class="container">
        <div class="row">
          <br>
          <br>
          <br>
          <br>
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
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <br><br><br><br>
            <h3 style="color:darkred">Product 4</h3>
            <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
          <div class="col-sm-4">
            <br><br><br><br>
            <h3 style="color:darkred">Product 5</h3>
            <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
          <div class="col-sm-4">
            <br><br><br><br>
            <h3 style="color:darkred">Product 6</h3>
            <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
      </div>
      <hr />
      <!-- <img src="../finalVersion/img/inicio3.jpg" alt="New York" width="100%"> -->
      <!-- <img src="../finalVersion/img/inicio3.jpg" class="img-fluid" alt="..."> -->
      <img src="../finalVersion/img/inicio3.jpg" class="rounded float-start" alt="a" style="width: 33%; margin-left:20px">
      <img src="../finalVersion/img/inicio3.jpg" class="rounded float-start" alt="a" style="width: 33%; margin-left:20px">
      <img src="../finalVersion/img/inicio3.jpg" class="rounded float-start" alt="a" style="width: 33%; margin-left:20px">

      <p> a </p>
    </div>

  </div>

  <div>
    <!-- PART TWO OF THE PAGE-->
    <hr />
    <br><br>
    <h2>Work area</h2>
    <p>Move the mouse over a button inside the tabbed menu:</p>

    <div class="tab" style="margin-left: 20;">
      <button class="tablinks" onmouseover="openCity(event, 'London')">London</button>
      <button class="tablinks" onmouseover="openCity(event, 'Paris')">Paris</button>
      <button class="tablinks" onmouseover="openCity(event, 'Tokyo')">Tokyo</button>
    </div>

    <div id="London" class="tabcontent">
      <h3>London</h3>
      <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
      <h3>Paris</h3>
      <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div>

    <div class="clearfix"></div>

  </div>

  <br><br><br><br>
  abc
  <hr />


  <br><br>
  <div class="hola2">
    <img src="../finalVersion/img/inicio3.jpg" class="rounded float-start" alt="a" style="width: 33%;">
    <img src="../finalVersion/img/fondoInicio2.webp" class="rounded float-center" alt="a" style="width: 33%; height:80%">
    <img src="../finalVersion/img/fondoIndex1.jpg" class="rounded float-center" alt="a" style="width: 33%;">
  </div>
  <br>
  <br>
  <br>
  <br>
  </div>
  </div>
  <div class="hola">
    <div class="hero-text">
      <!-- <h1 style="font-size:50px">DIY GARAGE</h1>
      <p>Welcome to (Y)our garage!</p>
      <button onclick=location.href="loginCustomers.php">Login now</button><br><br>
      <button onclick=location.href="sessioak.php">Log in as Customer</button>
      <button onclick=location.href="sessioakWorkers.php">Log in as Worker</button>
      <button onclick=location.href="loginClientes.php">Log in as Admin</button> -->

    </div>
  </div>
  <!-- The slideshow -->
  <div class="carousel-inner" style="width: 100%; text-align:center">
    <div class="carousel-item active" style="height:100%; width:100%">
      <img src="../finalVersion/img/inicio3.jpg" alt="New York" width="100%"> <!-- width="100%" height="60%" -->
    </div>
    <div class="carousel-item" style="height:100%;width:100%">
      <!-- <img src="../finalVersion/img/encabezadoTaller1.jpg" alt="Los Angeles" width="100%" height="60%"> -->
      <img src="../finalVersion/img/fondoInicio2.webp" alt="Los Angeles" width="80%" height="80%">
    </div>
    <div class="carousel-item" style="height:100%; width:100%">
      <img src="../finalVersion/img/fondoLogin1.jfif" class="float-right" alt="Chicago" width="100%" height="80%">
    </div>
  </div>
  <!-- Left and right controls -->

  </div>
  <!-- <br><br>
      <br><br> -->
  <div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>
  <div class="hola">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <br>
          <h3 style="color:darkred">Products</h3>
          <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <br>
          <h3 style="color:darkred">Cabins</h3>
          <p style="color:grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <br>
          <h3 style="color:darkred">Shoppings</h3>
          <p style="color:grey;text-align: right;">Laaorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          <p style="color:grey">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>
    </div>
    <!-- <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Column 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <h3>Column 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
          <h3>Column 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>
    </div> -->
  </div>
  <hr />
  <!-- <img src="../finalVersion/img/inicio3.jpg" alt="New York" width="100%"> -->
  <!-- <img src="../finalVersion/img/inicio3.jpg" class="img-fluid" alt="..."> -->
  <img src="../finalVersion/img/inicio3.jpg" class="rounded float-start" alt="a" style="width: 33%; margin-left:100px">
  <img src="../finalVersion/img/fondoInicio2.webp" class="rounded float-center" alt="a" style="width: 33%; height:60%; margin-left:80px">
  <!-- <img src="../finalVersion/img/fondoInicio2.webp" class="rounded mx-auto d-block" alt="a" style="width: 33%; margin-left:80px"> -->
  <img src="../finalVersion/img/inicio3.jpg" class="rounded float-start" alt="a" style="width: 33%;">
  <img src="../finalVersion/img/fondoIndex1.jpg" class="rounded float-center" alt="a" style="width: 33%;">
  <img src="../finalVersion/img/inicio3.jpg" class="rounded float-end" alt="a" style="width: 33%;">
  <br>
  <br>
  <br>
  <br>
  </div>
  </div>
</body>
<!-- <body class="hola">
</body> -->

</html>