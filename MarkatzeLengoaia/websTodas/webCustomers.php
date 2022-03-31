<!DOCTYPE html>
<html>

<style>
    .centrar {
    text-align: center;
    
}
</style>

<body>
    
</body>
<?php      
    include('connection_DB.php');
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from customer where Username = '$username' and Password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            
            include("test_connect_db.php");
            $link2 = connectDataBase();
            // $emaitza = mysqli_query($link, "select * from customer");
            $emaitza = mysqli_query($link2, "select * from customer");
            ?>
            <center>
            <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
                <Tr>
                    <Td>Username</Td>
                    <Td>Name</Td>
                    <Td>Surname</Td>
                    <Td>Password</Td>
                    <Td>Birthday</Td>
                    <Td>Mail</Td>
                    <Td>Phone Number</Td>
                </Tr>
                <?php
                while ($erregistroa = mysqli_fetch_array($emaitza)) {
                    printf("<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%ld</td>
                                <td>%s</td>
                                <td>%d</td>
                            </tr>", 
                            $erregistroa[0], $erregistroa[1], $erregistroa[2], $erregistroa[3], $erregistroa[4], $erregistroa[5], $erregistroa[6]);
                }
                mysqli_free_result($emaitza);
                mysqli_close($link2);
                ?>
            </table>
            </center>
            <br><br><hr><br>
    <?php
        }  
        else{
            echo "<h1 align=center> Login failed. Invalid username or password.</h1>"; 
            echo "<script type='text/javascript'>alert('Incorrect values for Username or Password. Try again...');</script>";

        }
          
?> 
<p><center><button onclick=location.href="../websTodas/index.php" type="reset">Return</button><br><br></center></p>

<br><br>
<p class="centrar">VER TODO EL CONTENIDO DE LA TABLA DE CLIENTES:</p>


<hr>
</html>