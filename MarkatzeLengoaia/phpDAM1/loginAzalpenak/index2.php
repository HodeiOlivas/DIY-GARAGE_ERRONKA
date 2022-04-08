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
        height: 1100px; /*1100px*/
        text-align: center;
    }


  </style>
</head>
<body>



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
      <img src="../loginAzalpenak/img/inicio3.jpg" alt="New York" width="100%">  <!-- width="100%" height="60%" -->
    </div>
    <div class="carousel-item" style="height:100%;width:100%">
      <!-- <img src="../loginAzalpenak/img/encabezadoTaller1.jpg" alt="Los Angeles" width="100%" height="60%"> -->
      <img src="../loginAzalpenak/img/fondoInicio2.webp" alt="Los Angeles" width="80%" height="80%">
    </div>
    <div class="carousel-item" style="height:100%; width:100%">
      <img src="../loginAzalpenak/img/fondoLogin1.jfif" class="float-right" alt="Chicago" width="100%" height="80%">
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

<br><br>
<br><br>

<div class="container">
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
  </div>

<br>
<br>
<br>
<br>

</body>
</html>