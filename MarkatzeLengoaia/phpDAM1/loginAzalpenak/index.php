<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif; 
  font-size: 16px;
}

.header {
  padding: 60px;
  text-align: center;
  color: white;
  font-size: 30px;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../loginAzalpenak/img/encabezadoTaller1.jpg");
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

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container {
  position: relative;
  width: 50%;
}

.container:hover .overlay {
  opacity: 1;
}

.image {
  text-align: left;
  display: block;
  width: 100%;
  height: auto;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
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

</style>
</head>
<body>



<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">DIY GARAGE</h1>
    <p>Welcome to (Y)our garage!</p>
    
    <button onclick=location.href="loginCustomers.php">Login now</button><br><br>
    <button onclick=location.href="sessioak.php">Log in as Customer</button>
    <button onclick=location.href="loginWorker.php">Log in as Worker</button>
    <button onclick=location.href="loginClientes.php">Log in as Admin</button>
    
    
    <!-- <button onclick=location.href="webClients.php">Login now</button>     -->
  </div>
</div>

<a href="webClient2s.php">Back to menu</a>

<input type="submit" value="Log in" href="ventanaLogin.php">
<!-- <input type="submit" value="Log in" href="webClient2s.php"> -->
<br><br>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>



<p>Page Content..</p>
<br>
<br>
<br>

</body>
</html>