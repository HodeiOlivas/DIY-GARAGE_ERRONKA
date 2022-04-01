<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web erabiltzaileak</title>

<style>
    body {
  font-size: 16px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
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
</style>
</head>


<body>
    <h1> Welcome to Customer's website. </h1>

    <div class="header">
        <h2>Scroll Down</h2>
        <p>Scroll down to see the sticky effect.</p>
    </div>

    <ul>
    <li><a class="active" href="#erabiltzaile guztiak">Home</a></li>
    <li><a href="#acabar">News</a></li>
    <li><a href="#contact">Contact</a></li>
    </ul>

<br>
<hr/>
<br>

    <h3 id="erabiltzaile guztiak">Sticky Navigation Bar Example</h3>

    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    
    <div>
        <?php
        include("test_connect_db.php");
        $link = connectDataBase();
        $emaitza = mysqli_query($link, "select * from erabiltzaileak");

        

        ?>
        
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
            <Tr>
                <Td>langile_ID</Td>
                <Td>langile_izena</Td>
            </Tr>
            <?php
            while ($erregistroa = mysqli_fetch_array($emaitza)) {
                printf("<tr><td>%s</td><td>%s</td></tr>", $erregistroa[0], $erregistroa[1]);
            }
            mysqli_free_result($emaitza);
            mysqli_close($link);
            ?>
        </table>
        
            

    </div>
    <br />

    <p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
    <p><strong>Note:</strong> Internet Explorer do not support sticky positioning and Safari requires a -webkit- prefix.</p>
    </br>
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