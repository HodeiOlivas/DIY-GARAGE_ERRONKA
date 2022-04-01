<?php
    include("test_connect_db.php");
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $link=connectDataBase();
    $result=mysqli_query($link, "select usuario, pasahitza
                                    from erabiltzaileak 
                                    where usuario = '$usuario'
                                        and pasahitza = '$password'
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
        $_SESSION["newsession"]=$usuario;
        echo $_SESSION["newsession"];

        header("Location:webErabiltzaileak.php?incorrecto=no");
        
    }

?>