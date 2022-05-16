<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <div>
        <h3>Identify yourself as a Customer:</h3>
        <form name="f1" action="kontsultatu_erabiltzaileak.php" method="POST">
            Erabiltzailea: <br>
            <input type="text" name="usuario" required />
            <br>
            Pasahitza: <br>
            <input type="password" name="password" required />
            <br>
            <input type="submit" value="Login" />
        </form>
    </div>
    <?php
    if (isset($_GET["incorrecto"])) {
        if ($_GET["incorrecto"] == "si") {
    ?>
            <p style="color:#F00">
                <b>Daaaaaatuak txarto sartu dituzu.</b>
            </p>
            <img src="stop.jpg">
    <?php
        }
    }
    ?>

    <?php
    if (isset($_GET["incorrecto"])) {
        if ($_GET["incorrecto"] == "no") {

    ?>
            <p style="color:#F00">
                <b>Datuawdwdwk txarto sartu dituzu.</b>
            </p>
            <img src="validar.jpg">



    <?php
    session_start();
    printf($_SESSION['usuario']);
        }
    }
    ?>


</body>

</html>