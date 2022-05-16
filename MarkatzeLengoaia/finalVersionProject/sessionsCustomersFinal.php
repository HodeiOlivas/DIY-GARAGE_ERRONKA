<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CLI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- Google font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        html,
        body {
            font-family: 'Inter', sans-serif;
        }

        .primary-bg {
            background-color: #3B4754;
        }

        #username {
            font-family: 'Inter', sans-serif;
            letter-spacing: 1px;
        }

        .no-border {
            border: 0;
            box-shadow: none;
            /* You may want to include this as bootstrap applies these styles too */
        }

        .light-bg-form {
            background-color: rgba(237, 242, 247);
        }

        #loginButton:hover {
            background-color: #4cada4;
        }

        .text-LoginGreen {
            color: #458781;
        }

        .bg-LoginGreen {
            background-color: #458781;
        }

        #atzeraButton:hover {
            background-color: rgba(216, 221, 227);
        }
    </style>

</head>

<body class="primary-bg">


    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center pt-5 pb-4">
                <!-- Atzera -->
                <div class="col">
                    <a href="indexFinal.php" class="align-left text-decoration-none">
                        <button id="atzeraButton" class="btn d-flex flex-row-reverse align-items-center light-bg-form py-0">
                            <input type="submit" value="Atzera" class="btn text-muted fw-bold" />
                            <i class="bi bi-chevron-left"></i>
                        </button>
                    </a>
                </div>
                <div class="col">
                    <!-- <p class="text-LoginGreen text-center fs-4 fw-bold m-0">Identify yourself as a Customer:</p> -->
                    <img src="img/logo.png" alt="fuck" width="400px" height="60">

                </div>

                <div class="col"></div>
            </div>
            <div class="col-3 container pt-5">
                <form name="f1" class="form-label" action="kontsultatu_erabiltzaileak.php" method="POST">
                    <!-- Erabiltzailea -->
                    <div class="d-flex flex-column">
                        <label for="Erabiltzailea" id="username" class="fw-bolder fs-6 text-uppercase text-muted"><small>Username:</small></label>
                        <input type="text" name="usuario" id="Erabiltzailea" class="form-control light-bg-form no-border" placeholder="enter username" required />
                    </div>

                    <!-- pasahitza -->
                    <div class="d-flex flex-column pt-4">
                        <label for="pasahitza" id="username" class="fw-bolder fs-6 text-uppercase text-muted"><small> Password:</small></label>
                        <input type="password" name="password" id="pasahitza" class="form-control light-bg-form no-border" placeholder="enter password" required />
                    </div>


                    <div class="d-flex flex-row-reverse pt-3">

                        <!-- Login  -->
                        <button id="loginButton" class="btn d-flex flex-row-reverse align-items-center bg-LoginGreen py-0">
                            <i class="bi bi-chevron-right text-white"></i>
                            <input type="submit" value="Login" class="btn text-white fw-bold" />
                        </button>

                    </div>
                </form>

            </div>

        </div>
    </div>
    <?php
    if (isset($_GET["incorrecto"])) {
        if ($_GET["incorrecto"] == "si") {
    ?>
            <div class="d-flex justify-content-center">
                <p style="color:#F00;"><strong>Error!</strong> Username or password is incorrect. Try again... </b>
                    <!-- <img src="stop.jpg"> -->
            </div>
    <?php
        }
    }
    ?>

    <?php
    if (isset($_GET["incorrecto"])) {
        if ($_GET["incorrecto"] == "no") {

    ?>
            <div class="d-flex justify-content-center">
                <p style="color:greenyellow;">Entered data is correct! Continue. </b>
                    <img src="validar.jpg">
            </div>



    <?php
            // session_start();
            // printf($_SESSION['usuario']);
        }
    }
    ?>


</body>

</html>