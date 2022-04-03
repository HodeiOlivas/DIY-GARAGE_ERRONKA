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
      /* margin-left: 12px; */
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
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
      background-color: #111;
    }

    .active {
      background-color: #4CAF50;
    }

    h1 {
      padding: 10px 25px;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>


<body>
  <h1> Welcome to Customer's website. </h1>
  <!-- <h1 style="margin-left: 80px;"> Welcome to Customer's website. </h1> -->

  <div class="header">
    <h2>CUSTOMER</h2>
    <p>Scroll down to see the sticky effect.</p>
  </div>

  <ul>
    <li><a class="active" href="#erabiltzaile guztiak">Home</a></li>
    <li><a href="#acabar">Products</a></li>
    <li><a href="#acabar">Reservations</a></li>
    <li><a href="#acabar">Purchases</a></li>
    <li><a href="#acabar">Profile</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acabar">About us</a></li>
  </ul>

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
  <div c </br>
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
    <p id="acabar">The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>


</body>

</html>