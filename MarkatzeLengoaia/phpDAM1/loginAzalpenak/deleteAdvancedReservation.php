<html>
	<head>
		<link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="style_php.CSS">      
		<title>Delete Advanced Reservation</title>
	</head>
	<body>


    <?php
		include("test_connect_db.php");
        session_start();
        $currentUser = $_SESSION['usuario'];
		$idReservationDelete = $_GET["reservationIdentifier"];
		
		$link = connectDataBase();
		$emaitza = mysqli_query($link,"delete from reservation where id_Reservation = '$idReservationDelete'");

		echo ("<script LANGUAGE='JavaScript'>
				window.alert('The specified reservation has been successfully deleted.');
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