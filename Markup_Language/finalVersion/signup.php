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



    <script>
        function berdinakPasahitzak() {
            password = document.f1.password.value;
            password2 = document.f1.password2.value;

            if (password == password2)
                alert("The two keys are the same.");
            else
                alert("The two keys are different.");
        }
    </script>
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
            <div class="col-3 container pt-5" style="border:1px solid #ccc; ">
                <form action="insert_customers.php" name="f1" method="post">
                    <div class="container" style="color:white;">
                        <h1>Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <label for="text"><b>Username</b></label>
                        <input type="text" placeholder="Enter username" name="newUsername" required>

                        <label for="text"><b>Name</b></label>
                        <input type="text" placeholder="Enter your name" name="newName" required>

                        <label for="text"><b>Surname</b></label>
                        <input type="text" placeholder="Enter your surname" name="newSurname" required>


                        <label for="psw-repeat"><b>Password</b></label>
                        <input type="password" placeholder="Enter password" name="newPassword" id="f1" maxlength="10" required>


                        <label for="psw-repeat"><b> Repeat password</b></label>
                        <input type="password" name="newPasswordTwo" value="" placeholder="Enter password" maxlength="10" required />
                        <br />


                        <label for="psw-repeat"><b>Birthday</b></label>
                        <br>
                        <input type="date" placeholder="Enter your birthday" name="newBirthday" required>

                        <br>


                        <label for="psw-repeat"><b>Email</b></label>
                        <br>
                        <input type="mail" placeholder="Enter your email" name="newEmail" required>

                        <br>

                        <label for="psw-repeat"><b>Phone number</b></label>
                        <br>
                        <input type="number" placeholder="Enter your phone number" name="newPhonenumber" required>

                        <br>
                        <br>
                        <br>
                        <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

                        <div class="clearfix">
                            <button type="button" class="cancelbtn"> <a style="text-decoration:none; color:black;" href="indexFinal.php">Cancel </a> </button>
                            <button type="submit" class="signupbtn" onClick="berdinakPasahitzak()">Sign Up</button>
                        </div>

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