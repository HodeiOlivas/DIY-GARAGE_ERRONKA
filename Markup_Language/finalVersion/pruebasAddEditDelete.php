<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").hide();
  });
});
</script>
</head>
<body>

<?php
        // if(array_key_exists('button1', $_POST)) {
        //     button1();
        // }
        // else if(array_key_exists('button2', $_POST)) {
        //     button2();
        // }
        // function button1() {
        //     echo "This is Button1 that is selected";
        // }
        // function button2() {
        //     echo "This is Button2 that is selected";
        // }
?>

<?php

    include("test_connect_db.php");
    session_start();
    $username00 = $_SESSION['usuario'];
    $username = $_POST["username"];
    $cabin = $_POST["cabin_id"];    //written on a text input
    $cabin00 = $_POST["cabinChoices"];  //selected on a dropdown menu options


    
?>


  

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button>Click me to hide paragraphs</button>
<button id="prueba1">Click me to hide paragraphs</button>

</body>
</html>