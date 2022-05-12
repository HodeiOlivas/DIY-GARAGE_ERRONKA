<?php
    include("test_connect_db.php");
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $password=$_POST["password"];
    $link=connectDataBase();
    $result=mysqli_query($link, "select Worker_ID, Name, Surname, Password
                                    from worker 
                                    where Name = '$name'
                                        and Surname = '$surname'
                                        and Password = '$password'
                                    ");

    if (mysqli_num_rows($result) == 0)
    {
        header("Location:sessioakWorkers.php?incorrecto=si");
        //header("Location:sessioak.php?incorrecto=si");
    }
    else
    // else if (mysqli_num_rows($result) == 1)
    {
        session_start();
        $_SESSION["newsession"]=$name;
        echo $_SESSION["newsession"];

        header("Location:webWorkers.php?incorrecto=no");
        
    }
