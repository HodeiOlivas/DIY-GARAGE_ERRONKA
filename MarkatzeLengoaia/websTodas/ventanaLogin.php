<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: url('../websTodas/Imagenes/encabezadoTaller3.jpg');
    background-repeat: no-repeat;
    background-size: 100%; 
    /* background-color: white; */
    
}   
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  /* margin: 24px 0 12px 0; */
  /* 50%, 200px */
  width: auto;
  height: 500px;
  background-image: url('../websTodas/Imagenes/encabezadoTaller2.jpg');
  background-size: auto;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 100px;    /* 16px */
  text-align: left;
  color:black;
  width: 30%;
  /* background-image: url('../websTodas/Imagenes/encabezadoTaller2.jpg'); */
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.fondoLogin {
    /* background-repeat: no-repeat; */
    /* background-image: url('../websTodas/Imagenes/encabezadoTaller2.jpg'); */
    padding: 25px;
    background-repeat: no-repeat;
    background-size: cover;
    
}



</style>
</head>
<body>

<h2 style="color:blue">Login Form</h2>



<form action="/action_page.php" method="post" class="fondoLogin">
  <!-- <div class="imgcontainer">
    <img src="../websTodas/Imagenes/encabezadoTaller2.jpg" class="imgcontainer">
  </div> -->
  <img align="right" src="../websTodas/Imagenes/encabezadoTaller2.jpg" class="imgcontainer">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" size="50" required><br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <button type="submit">Sign up!</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>

</body>
</html>