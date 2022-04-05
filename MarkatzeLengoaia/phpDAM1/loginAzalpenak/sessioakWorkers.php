<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .formAlign {
        padding-left: 80px;
        padding-right: 80px;
        text-align: center;
        width: 8%;
    }
</style>

<body>

    <h3>Identify yourself as a Worker:</h3>
    <form name="f1" action="kontsultatu_workers.php" method="POST">
        Worker's name:<br>
        <input type="text" name="name" class="formAlign" placeholder="enter name" required />
        <br><br>
        Surname:<br>
        <input type="text" name="surname" class="formAlign" placeholder="enter surname"  required />
        <br><br>
        Password:<br>
        <input type="password" name="password" placeholder="enter your password" class="formAlign" required />
        <br><br>
        <input type="submit" value="Login" />
    </form>

    <?php
    if (isset($_GET["incorrecto"])) {
        if ($_GET["incorrecto"] == "si") {
    ?>
            <p style="color:#F00">
                <b>Datuak txarto sartu dituzu.</b>
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
                <b>Datuak txarto sartu dituzu.</b>
            </p>
            <img src="validar.jpg">



    <?php
        }
    }
    ?>


</body>

</html>