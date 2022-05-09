<html>
	<head>
		<link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">      
		<title>Your Cart</title>
	</head>
	<body>


    <?php
		include("test_connect_db.php");
        session_start();
		$prodName = $_GET["prodNameIdentifier"];
        $currentUser = $_SESSION['usuario'];
		
		$link = connectDataBase();
		$emaitza=mysqli_query($link,"insert into purchase (cust_Username, prod_ID) values ('$currentUser', '$prodName')");
		
		// $kontsultDelete = mysqli_query($link,"select * from purchase");

		// $messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
		// echo "<script type='text/javascript' href='webErabiltzaileak.php'>alert('$messageAfterDeletePurchase');</script>";

		echo ("<script LANGUAGE='JavaScript'>
				window.alert('he specified purchase has been successfully deleted.');
    			window.location.href='webErabiltzaileak.php';
    		</script>");
		
	?>


	<!-- <a href="webErabiltzaileak.php">Go back</a> -->

	<?php
		// header("Location: webErabiltzaileak.php");
	?>

	</body>
</html>


<!-- 
	$messageAfterDeletePurchase = "The specified purchase has been successfully deleted.";
	echo "<script type='text/javascript'>alert('$messageAfterDeletePurchase');</script>"; 
-->