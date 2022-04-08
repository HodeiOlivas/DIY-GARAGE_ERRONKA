<?php
    include("test_connect_db.php");
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $link=connectDataBase();
    $result=mysqli_query($link, "select Username, Name, Surname, Password
                                    from customer 
                                    where Username = '$usuario'
                                        and Password = '$password'
                                    ");

    if (mysqli_num_rows($result) == 0)
    {
        header("Location:sessioak.php?incorrecto=si");
        //header("Location:sessioak.php?incorrecto=si");
    }
    else
    // else if (mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION["usuario"]=$usuario;
        // echo $_SESSION["newsession"];

        // header("Location:webErabiltzaileak.php?incorrecto=no");
        header("Location:webErabiltzaileak.php");
        
    }

?>