<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../websTodas/Imagenes/encabezadoTaller1.jpg");
  height: 100%; /* 50% */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}



</style>
</head>
<body>
    

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">DIY GARAGE</h1>
    <p>Welcome to (Y)our garage!</p>
    
    <button onclick=location.href="ventanaLogin.php">Login now</button>
    <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
  </div>
</div>

<a href="webClient2s.php">Back to menu</a>

<input type="submit" value="Log in" href="ventanaLogin.php">
<!-- <input type="submit" value="Log in" href="webClient2s.php"> -->

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<p>Page Content..</p>

</body>
</html>