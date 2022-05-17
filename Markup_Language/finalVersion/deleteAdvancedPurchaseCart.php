<html>

<head>
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">
    <title>Delete Advanced Purchase From Cart</title>
</head>

<body>


    <?php
    include("test_connect_db.php");
    session_start();
    $currentUser = $_SESSION['usuario'];
    $idPurchaseCartDelete = $_GET["purchaseCartIdentifier"];

    $link = connectDataBase();
    $emaitza = mysqli_query($link, "delete from purchase where id_Purchase = '$idPurchaseCartDelete'");

    echo ("<script LANGUAGE='JavaScript'>
    		window.alert('The specified reservation has been successfully deleted.');
    	</script>");

    ?>

    <!-- <a href="webErabiltzaileak.php">Go back</a> -->

    <?php
    header("Location: shoppingCart.php");
    //header("Location: webErabiltzaileak.php");
    ?>

</body>

</html>


<!-- 
	$messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
	echo "<script type='text/javascript'>alert('$messageAfterDeletePurchase');</script>"; 
-->